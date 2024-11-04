<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Region;
use App\Models\Ville;
use Illuminate\Http\Request;

class LocalisationController extends Controller
{
    public function recherche_pays(Request $request)
    {
        // Récupère les pays, avec une recherche partielle si un terme est fourni
        $query = Pays::query();
        if ($request->has('term')) {
            $query->where('Nom', 'LIKE', '%' . $request->term . '%')
                ->orderByRaw("CASE WHEN Nom = ? THEN 1 WHEN Nom LIKE ? THEN 2 ELSE 3 END", [$request->term, $request->term . '%'])
                ->limit(5)->get();
        }
        $countries = $query->get();

        // Formate les données pour Select2
        $formattedCountries = [];
        foreach ($countries as $country) {
            $formattedCountries[] = ['id' => $country->Id_Pays, 'text' => $country->Nom];
        }

        return response()->json(['results' => $formattedCountries]);
    }

    // Récupère les régions en fonction de l'ID du pays sélectionné
    public function recherche_region($country_id)
    {
        $regions = Region::where('Id_Pays', $country_id)->get();
        $formattedRegions = [];
        foreach ($regions as $region) {
            $formattedRegions[] = [
                'id' => $region->Id_Region,
                'text' => $region->Nom
            ];
        }

        return response()->json(['results' => $formattedRegions]);
    }


    public function recherche_ville($region_id)
    {
        $cities = Ville::where('Id_Region', $region_id)->get();

        $formattedCities = [];
        foreach ($cities as $city) {
            $formattedCities[] = [
                'id' => $city->Id_Ville,
                'text' => $city->Nom
            ];
        }

        return response()->json(['results' => $formattedCities]);
    }
}
