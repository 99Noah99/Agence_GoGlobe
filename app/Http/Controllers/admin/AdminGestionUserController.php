<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Facture;
use Illuminate\Support\Facades\DB;
use Exception;


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
                if ($billetBus->facture) {
                    $this->deleteFactureWithPayments($billetBus->facture);
                }
                $billetBus->delete(); // Supprimer ensuite le billet de bus
            }

            // Supprimer les factures associées aux billets de train
            foreach ($client->billet_train as $billetTrain) {
                if ($billetTrain->facture) {
                    $this->deleteFactureWithPayments($billetTrain->facture);
                }
                $billetTrain->delete(); // Supprimer ensuite le billet de train
            }

            // Supprimer les factures associées aux billets d'avion
            foreach ($client->billet_avion as $billetAvion) {
                if ($billetAvion->facture) {
                    $this->deleteFactureWithPayments($billetAvion->facture);
                }
                $billetAvion->delete(); // Supprimer ensuite le billet d'avion
            }

            // Supprimer les réservations de voitures, forfaits, chambres, etc.
            foreach ($client->reserver_voiture as $reservation) {
                if ($reservation->facture) {
                    $this->deleteFactureWithPayments($reservation->facture);
                }
                $reservation->delete();
            }

            foreach ($client->reserver_forfait as $forfait) {
                if ($forfait->facture) {
                    $this->deleteFactureWithPayments($forfait->facture);
                }
                $forfait->delete();
            }

            foreach ($client->reserver_chambre as $chambre) {
                if ($chambre->facture) {
                    $this->deleteFactureWithPayments($chambre->facture);
                }
                $chambre->delete();
            }

            // Supprimer l'utilisateur associé au client
            $client->user->delete();

            // Supprimer enfin le client
            $client->delete();

            DB::commit();
            return redirect()->route('show_admin_all_user')->with('success', 'Client supprimé avec succès');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('show_admin_all_user')->with('error', 'Erreur lors de la suppression');
        }
    }

    public function admin_update_user(Request $request)
    {
        $client = Client::find($request->id);
    }

    private function deleteFactureWithPayments(Facture $facture)
    {
        // Supprimer tous les paiements associés à la facture
        foreach ($facture->payements as $payement) {
            $payement->delete();
        }

        // Supprimer la facture
        $facture->delete();
    }
}
