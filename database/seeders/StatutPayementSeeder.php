<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatutPayement;

class StatutPayementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatutPayement::create([
            'Intitule' => 'Payé',
        ]);

        StatutPayement::create([
            'Intitule' => 'Non Payé',
        ]);

        StatutPayement::create([
            'Intitule' => 'En Attente',
        ]);
    }
}
