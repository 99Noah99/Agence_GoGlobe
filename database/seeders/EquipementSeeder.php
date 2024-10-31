<?php

namespace Database\Seeders;

use App\Models\Equipement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Equipement::create([
            'Intitule' => 'Télévision',
        ]);

        Equipement::create([
            'Intitule' => 'Climatisation',
        ]);

        Equipement::create([
            'Intitule' => 'Wifi',
        ]);

        Equipement::create([
            'Intitule' => 'Ordinateur portable',
        ]);
    }
}
