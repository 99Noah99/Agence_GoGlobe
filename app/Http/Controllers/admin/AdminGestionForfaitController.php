<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieClientForfait;
use App\Models\MoyenTransport;
use App\Models\Hebergement;
use App\Models\TypeForfaitVoyage;
use Illuminate\Http\Request;

class AdminGestionForfaitController extends Controller
{

    public function show_admin_add_forfait()
    {
        $donnee_categorie_forfait = CategorieClientForfait::select('Id_Categorie_Client_Forfait', 'Type')->get();
        $donnee_type_forfait = TypeForfaitVoyage::select('Id_Type_Forfait_Voyage', 'Nom')->get();
        return view('admin.admin_add_forfait', ['donnee_categorie_forfait' => $donnee_categorie_forfait, 'donnee_type_forfait' => $donnee_type_forfait]);
    }

    public function get_hebergement(Request $request)
    {
        $query = Hebergement::with(['ville' => function ($query) {
            $query->select('Id_Ville', 'Nom');
        }])->select('Id_Hebergement', 'Nom', 'Id_Ville');

        if ($request->has('term')) {
            $term = $request->term;
            $query->where('Nom', 'LIKE', '%' . $term . '%')
                ->orderByRaw("CASE WHEN Nom = ? THEN 1 WHEN Nom LIKE ? THEN 2 ELSE 3 END", [$term, $term . '%'])->limit(5);
        }

        $results = $query->get();
        $return = [];

        foreach ($results as $hebergement) {
            $return[] = [
                'id' => $hebergement->Id_Hebergement, // ID pour Select2
                'text' => $hebergement->Nom . ' - ' . $hebergement->ville->Nom, // Texte affiché
            ];
        }

        return response()->json(['results' => $return]);
    }

    public function get_moyen_transport(Request $request)
    {
        $query = MoyenTransport::select('Id_Moyen_Transport', 'Nom_mode_transport');
        if ($request->has('term')) {
            $term = $request->term;
            $query->where('Nom_mode_transport', 'LIKE', '%' . $term . '%')
                ->orderByRaw("CASE WHEN Nom = ? THEN 1 WHEN Nom LIKE ? THEN 2 ELSE 3 END", [$term, $term . '%'])->limit(5);
        }

        $results = $query->get();
        $return = [];

        foreach ($results as $moyen_transport) {
            // Ajout de chaque résultat dans un tableau ( a la fin )
            $return[] = [
                'id' => $moyen_transport->Id_Moyen_Transport, // ID pour Select2
                'text' => $moyen_transport->Nom_mode_transport, // Texte affiché
            ];
        }

        return response()->json(['results' => $return]);
    }

    public function create_forfait(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'Nom' => 'required|string',
            'Description' => 'required|string',
            'Id_Categorie_Client_Forfait' => 'required|integer',
            'Id_Type_Forfait_Voyage' => 'required|integer',
            'Id_Hebergement' => 'required|integer',
            'Id_Moyen_Transport' => 'required|integer',
            'Prix' => 'required|numeric',
        ]);
    }
}
