<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieClientForfait;
use App\Models\MoyenTransport;
use App\Models\Hebergement;
use App\Models\TypeForfaitVoyage;
use App\Models\Forfait;
use App\Models\EtapeItineraire;
use App\Models\DeplacerMoyenTransport;
use App\Models\HebergementForfait;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

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
        DB::beginTransaction();

        try {
            // Validation des données du formulaire
            $request->validate([
                'Intitule' => 'required|string',
                'Duree' => 'required|integer',
                'Prix' => 'required|numeric',
                'Id_Categorie_Client_Forfait' => 'required|integer',
                'Id_Type_Forfait_Voyage' => 'required|integer',
                'Id_Moyen_Transport' => 'required|array', // Valide que c'est un tableau (multiple sélection)
                'Id_Moyen_Transport.*' => 'integer|exists:transport__moyen_transport,Id_Moyen_Transport', // Vérifie que chaque élément existe,
                'Id_Hebergement' => 'required|array',
                'Id_Hebergement.*' => 'integer|exists:hebergement,Id_Hebergement',

                // Validation pour le tableau `etapes`
                'etapes' => 'required|array',  // Vérifie que `etapes` est un tableau et qu'il est requis
                'etapes.*.titre' => 'required|string|max:255', // Valide chaque `titre` comme une chaîne requise, max 255 caractères
                'etapes.*.rang' => 'required|integer|min:1',   // Valide chaque `rang` comme un entier requis, min 1
            ]);

            $img = $request->image;
            if ($request->hasFile('image')) {
                // Stocker l'image et obtenir le chemin
                $path = $request->file('image')->store('', 'img_forfait'); // stockage de l'image dans le dossier img_forfait

                // enregistrement du forfait
                $forfait = Forfait::create([
                    'Intitule' => $request->Intitule,
                    'Duree' => $request->Duree,
                    'Prix' => $request->Prix,
                    'Image' => $path,
                    'Id_Categorie_Client_Forfait' => $request->Id_Categorie_Client_Forfait,
                    'Id_Type_Forfait_Voyage' => $request->Id_Type_Forfait_Voyage,
                    'Id_Personnel' => Auth::user()->Id_User,
                ]);
            } else {
                return back()->with('error', 'Erreur lors de l\'enregistrement de l\'image');
            }

            // Enregistrement des étapes associées au forfait
            foreach ($request->etapes as $etapeData) {
                EtapeItineraire::create([
                    'Id_Forfait' => $forfait->Id_Forfait,
                    'Titre' => $etapeData['titre'],
                    'Rang' => $etapeData['rang'],
                ]);
            }

            // Enregistrement des moyens de transport associés au forfait
            foreach ($request->Id_Moyen_Transport as $moyenTransportId) {
                DeplacerMoyenTransport::create([
                    'Id_Forfait' => $forfait->Id_Forfait,
                    'Id_Moyen_Transport' => $moyenTransportId,
                ]);
            }

            // Enregistrement des hébergements associés au forfait
            foreach ($request->Id_Hebergement as $hebergementId) {
                HebergementForfait::create([
                    'Id_Forfait' => $forfait->Id_Forfait,
                    'Id_Hebergement' => $hebergementId,
                ]);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erreur lors de la création du forfait');
        }
        return redirect()->route('show_admin_add_forfait')->with('success', 'Forfait créé avec succès');
    }
}
