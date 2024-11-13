<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pays;
use App\Models\Region;
use App\Models\Ville;

class LocalisationSeeder extends Seeder
{
    public function run()
    {
        // Nombre de pays à créer
        $nombrePays = 100;

        // Pour chaque pays
        for ($i = 0; $i < $nombrePays; $i++) {
            // Créer un pays
            $pays = Pays::factory()->create();

            // Nombre de régions par pays
            $nombreRegions = rand(2, 5);

            for ($j = 0; $j < $nombreRegions; $j++) {
                // Créer une région pour ce pays
                $region = Region::factory()->create([
                    'Id_Pays' => $pays->Id_Pays,
                ]);

                // Nombre de villes par région
                $nombreVilles = rand(3, 10);

                for ($k = 0; $k < $nombreVilles; $k++) {
                    // Créer une ville pour cette région
                    Ville::factory()->create([
                        'Id_Region' => $region->Id_Region,
                    ]);
                }
            }
        }
    }
}
