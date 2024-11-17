<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Forfait;
use App\Models\ReserverForfait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

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
                'intitule' => 'Facture de reservation pour forfait ' . $forfait->Intitule,
                'montant' => $forfait->Prix,
                'date_creation' => now()->format('d/m/Y'),
            ];

            // Générer le PDF
            $pdf = PDF::loadView('template_facture', $data);

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
            // dd($e);
            return back()->withInput()->withErrors($e->errors());
        }
    }
}
