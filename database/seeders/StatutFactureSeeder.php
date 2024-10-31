<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatutFacture;

class StatutFactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatutFacture::create([
            'Intitule' => 'Payé',
        ]);

        StatutFacture::create([
            'Intitule' => 'Non Payé',
        ]);

        StatutFacture::create([
            'Intitule' => 'En Attente de Payement',
        ]);

        StatutFacture::create([
            'Intitule' => 'Partiellement Payé',
        ]);
    }
}
