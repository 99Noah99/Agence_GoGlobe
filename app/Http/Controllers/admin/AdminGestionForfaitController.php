<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MoyenTransport;
use App\Models\Hebergement;

use Illuminate\Http\Request;

class AdminGestionForfaitController extends Controller
{

    public function show_admin_add_forfait()
    {
        return view('admin.admin_add_forfait');
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

    public function get_moyen_transport()
    {
        $moyen_transport = MoyenTransport::select('Id_Moyen_Transport', 'Nom_mode_transport')->get();
        return response()->json($moyen_transport);
    }
}
