<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\CategorieClientForfait;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Facture;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;


class AdminGestionUserController extends Controller
{
    public function show_admin_all_user()
    {
        $donnee_client = Client::select('Id_Client', 'created_at', 'Id_Categorie_Client_Forfait', 'Id_User')->with(['user:Id_User,Nom,Prenom,Email,Numero_tel', 'categorie_client_forfait:Id_Categorie_Client_Forfait,Type'])->get();
        // dd($donnee_client);
        return view('admin.admin_all_user', ['donnee_client' => $donnee_client]);
    }

    public function admin_delete_user(Request $request)
    {
        DB::beginTransaction();
        try {
            // Récupérer le client
            $client = Client::find($request->id);

            // Supprimer les factures associées aux billets de bus
            foreach ($client->billet_bus as $billetBus) {
                $billetBus->delete(); // Supprimer ensuite le billet de bus
                if ($billetBus->facture) {
                    $this->deleteFactureWithPayments($billetBus->facture);
                }
            }

            // Supprimer les factures associées aux billets de train
            foreach ($client->billet_train as $billetTrain) {
                $billetTrain->delete(); // Supprimer ensuite le billet de train
                if ($billetTrain->facture) {
                    $this->deleteFactureWithPayments($billetTrain->facture);
                }
            }

            // Supprimer les factures associées aux billets d'avion
            foreach ($client->billet_avion as $billetAvion) {
                $billetAvion->delete(); // Supprimer ensuite le billet d'avion
                if ($billetAvion->facture) {
                    $this->deleteFactureWithPayments($billetAvion->facture);
                }
            }

            // Supprimer les réservations de voitures, forfaits, chambres, etc.
            foreach ($client->reserver_voiture as $reservation) {
                $reservation->delete();
                if ($reservation->facture) {
                    $this->deleteFactureWithPayments($reservation->facture);
                }
            }

            foreach ($client->reserver_forfait as $forfait) {
                $forfait->delete();
                if ($forfait->facture) {
                    $this->deleteFactureWithPayments($forfait->facture);
                }
            }

            foreach ($client->reserver_chambre as $chambre) {
                $chambre->delete();
                if ($chambre->facture) {
                    $this->deleteFactureWithPayments($chambre->facture);
                }
            }

            foreach ($client->avis_forfait as $avis) {
                $avis->delete();
            }

            foreach ($client->avis_hebergement as $avis) {
                $avis->delete();
            }

            foreach ($client->avis_voiture as $avis) {
                $avis->delete();
            }

            foreach ($client->avis_bus as $avis) {
                $avis->delete();
            }

            foreach ($client->avis_train as $avis) {
                $avis->delete();
            }

            foreach ($client->avis_avion as $avis) {
                $avis->delete();
            }

            // Supprimer l'utilisateur associé au client
            $client->user->delete();

            // Supprimer enfin le client
            $client->delete();
            DB::commit();
            return redirect()->route('show_admin_all_user')->with('success', 'Client supprimé avec succès');
        } catch (Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('show_admin_all_user')->with('error', 'Erreur lors de la suppression');
        }
    }

    public function show_admin_update_user(Request $request)
    {
        $donnee_client = Client::with(['user', 'categorie_client_forfait'])->find($request->id);
        $donne_categorie_client_forfait = CategorieClientForfait::all();
        return view('admin.admin_update_user', ['donnee_client' => $donnee_client, 'donne_categorie_client_forfait' => $donne_categorie_client_forfait]);
    }

    public function admin_update_user(Request $request)
    {
        DB::beginTransaction();


        try {

            $request->validate([
                'Nom' => 'required|string|max:255',
                'Prenom' => 'required|string|max:255',
                'Email' => 'required|email|max:255',
                'Numero_tel' => 'required|string|max:255',
                'Categorie_Client_Forfait' => 'required|integer',
            ]);

            // Récupérer le client
            $client = Client::find($request->Id_Client);

            // Mettre à jour l'utilisateur associé au client
            $client->user->update([
                'Nom' => $request->Nom,
                'Prenom' => $request->Prenom,
                'Email' => $request->Email,
                'Numero_tel' => $request->Numero_tel,
            ]);

            // Mettre à jour la catégorie client forfait
            $client->update([
                'Id_Categorie_Client_Forfait' => $request->Categorie_Client_Forfait,
            ]);

            DB::commit();
            return redirect()->route('show_admin_all_user')->with('success', 'Client mis à jour avec succès');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('show_admin_all_user')->with('error', 'Erreur lors de la mise à jour');
        }
    }

    private function deleteFactureWithPayments(Facture $facture)
    {
        // Supprimer tous les paiements associés à la facture
        foreach ($facture->payements as $payement) {
            $payement->delete();
        }

        if (Storage::disk('facture')->exists($facture->Fichier)) {
            Storage::disk('facture')->delete($facture->Fichier);
        }
        // Supprimer la facture
        $facture->delete();
    }
}
