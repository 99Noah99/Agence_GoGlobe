<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TypeHebergement;
use App\Models\Hebergement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGestionHebergementController extends Controller
{
    public function show_admin_add_hebergement()
    {
        $donnee_type_hebergement = TypeHebergement::select('Id_Type_Hebergement', 'Intitule')->get();
        return view('admin.admin_add_hebergement', ['donnee_type_hebergement' => $donnee_type_hebergement]);
    }

    public function create_hebergement(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'Nom' => 'required|string',
            'Description' => 'required|string',
            'Id_Ville' => 'required|integer',
            'Id_Type_Hebergement' => 'required|integer',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $img = $request->image;
        if ($request->hasFile('image')) {
            // Stocker l'image et obtenir le chemin
            $path = $request->file('image')->store('', 'img_hebergement'); // stockage de l'image dans le dossier img_hebergement

            // enregistrement de l'hotel
            Hebergement::create([
                'Nom' => $request->Nom,
                'Description' => $request->Description,
                'Image' => $path,
                'Id_Ville' => $request->Id_Ville,
                'Id_Type_Hebergement' => $request->Id_Type_Hebergement,

            ]);

            return redirect()->route('show_admin_add_hebergement');
        } else {
            return back()->with('error', 'Erreur lors de l\'enregistrement de l\'image');
        }
    }
}
