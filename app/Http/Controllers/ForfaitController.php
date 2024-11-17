<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Forfait;
use App\Models\ReserverForfait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Payement;
use App\Models\TypePayement;

use Barryvdh\DomPDF\Facade\Pdf; // Utiliser la façade de dompdf
use Illuminate\Support\Facades\Storage;

class ForfaitController extends Controller
{
    public function show_forfait(Request $request)
    {
        $query = Forfait::query();
        if (isset($request->ville) && isset($request->duree)) {
            $donnee_forfait = $query->whereHas('ville', function ($q) {
                $q->where('Nom', request()->ville);
            })->where('Duree', request()->duree)->get();
        }

        if (Auth::user()->client->categorie_client_forfait->Id_Categorie_Client_Forfait == 1) {
            $donnee_forfait = $query->all();
        } else {
            $donnee_forfait = $query->where('Id_Categorie_Client_Forfait', Auth::user()->client->categorie_client_forfait->Id_Categorie_Client_Forfait)->get();
        }
        return view('forfaits', ['donnee_forfait' => $donnee_forfait]);
    }


    public function show_forfait_detail($Id_Forfait)
    {
        $forfait = Forfait::find($Id_Forfait);
        return view('forfait_detail', ['forfait' => $forfait]);
    }

    public function show_forfait_reservation($Id_Forfait)
    {
        $forfait = Forfait::find($Id_Forfait);
        return view('forfait_reservation', ['forfait' => $forfait]);
    }

    public function create_forfait_reservation(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'Date_debut' => 'required|date',
                'Date_fin' => 'required|date',
                'Id_Moyen_Transport' => 'required|integer',
                'Id_Hebergement' => 'required|integer',
                'Id_Forfait' => 'required|integer',
            ]);



            $forfait = Forfait::find($request->Id_Forfait);

            // ---------- Création de la facture PDF
            $data = [
                'intitule' => $forfait->Intitule,
                'montant' => $forfait->Prix,
                'date_creation' => now()->format('d/m/Y'),
                'date_debut' => $request->Date_debut,
                'date_fin' => $request->Date_fin,
                'Id_Forfait' => $forfait->Id_Forfait,
            ];

            // Générer le PDF
            $pdf = PDF::loadView('template.template_facture', $data);

            // Définir le chemin de sauvegarde
            $fileName = 'facture_' . time() . '.pdf';
            // Obtenir le chemin du fichier pour le stocker
            $filePath = $fileName; // Vous pouvez également stocker le chemin complet si nécessaire

            // Générer le contenu du PDF en tant que chaîne de caractères
            $pdfContent = $pdf->output();

            // Enregistrer le PDF sur le disque 'facture'
            Storage::disk('facture')->put($fileName, $pdfContent);

            $facture = Facture::create([
                'Intitule' => 'Facture de reservation pour forfait ' . $forfait->Intitule,
                'Montant' => $forfait->Prix,
                'Restant_payer' => $forfait->Prix,
                'Fichier' => $filePath,
                'Date_creation' => now(),
                'Id_Statut_Facture' => 3,
            ]);
            ReserverForfait::create([
                'Id_Moyen_Transport' => $request->Id_Moyen_Transport,
                'Id_Client' => Auth::user()->client->Id_Client,
                'Id_Forfait' => $request->Id_Forfait,
                'Id_Hebergement' => $request->Id_Hebergement,
                'Id_Facture' => $facture->Id_Facture,
                'Date_Debut' => $request->Date_debut,
                'Date_Fin' => $request->Date_fin,
            ]);
            DB::commit();
            return redirect()->route('show_account');
        } catch (ValidationException $e) {
            DB::rollBack();

            // Supprimer le fichier PDF si nécessaire
            if (isset($fileName) && Storage::disk('facture')->exists($fileName)) {
                Storage::disk('facture')->delete($fileName);
            }

            return back()->withInput()->withErrors($e->errors());
        } catch (\Exception $e) {
            DB::rollBack();

            // Supprimer le fichier PDF si nécessaire
            if (isset($fileName) && Storage::disk('facture')->exists($fileName)) {
                Storage::disk('facture')->delete($fileName);
            }

            // Gérer l'erreur générale
            return back()->with('error', 'Une erreur est survenue lors de la réservation. Veuillez réessayer.');
        }
    }

    public function telecharger_facture($Id_Facture)
    {
        $facture = Facture::findOrFail($Id_Facture);
        $fileName = $facture->Fichier;

        // Vérifier si le fichier existe
        $filePath = Storage::disk('facture')->path($fileName);

        if (file_exists($filePath)) {
            // Télécharger le fichier
            return response()->download($filePath);
        } else {
            // Gérer l'erreur si le fichier n'existe pas
            abort(404, 'Le fichier n\'existe pas.');
        }
    }

    public function show_forfait_reservation_payement($Id_Reservation)
    {
        $reservation = ReserverForfait::find($Id_Reservation);
        $current_user = Auth::user();
        $donnee_payement = Payement::all();
        $type_payement = TypePayement::all();
        return view('customer.account.forfait_reservation_payement', ['activeSection' => 'dashboard', 'reservation' => $reservation, 'current_user' => $current_user, 'donnee_payement' => $donnee_payement, 'type_payement' => $type_payement]);
    }

    public function create_forfait_reservation_payement(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'Id_Facture' => 'required|integer',
                'Id_Type_Payement' => 'required|integer',
                'Montant' => 'required|numeric',
            ]);

            $facture = Facture::find($request->Id_Facture);

            if ($facture->Restant_payer - $request->Montant < 0) {
                throw ValidationException::withMessages(['Montant' => 'Le montant du paiement ne peut pas être supérieur au montant restant à payer.']);
            }

            $facture = Facture::find($request->Id_Facture);

            if ($facture->Restant_payer - $request->Montant == 0) {
                $facture->update([
                    'Restant_payer' => $facture->Restant_payer - $request->Montant,
                    'Id_Statut_Facture' => 1,
                ]);
            } else {
                $facture->update([
                    'Restant_payer' => $facture->Restant_payer - $request->Montant,
                    'Id_Statut_Facture' => 4,
                ]);
            }


            Payement::create([
                'Prix' => $request->Montant,
                'Date_creation' => now(),
                'Id_Type_Payement' => $request->Id_Type_Payement,
                'Id_Statut_Payement' => 1,
                'Id_Facture' => $facture->Id_Facture,
            ]);

            DB::commit();
            return redirect()->route('show_account');
        } catch (ValidationException $e) {
            DB::rollBack();
            return back()->withInput()->withErrors($e->errors());
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Une erreur est survenue lors du paiement. Veuillez réessayer.');
        }
    }
}
