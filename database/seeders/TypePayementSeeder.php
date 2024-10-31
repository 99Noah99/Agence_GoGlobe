<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypePayement;

class TypePayementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypePayement::create([
            'Intitule' => 'Carte de crédit',
        ]);

        TypePayement::create([
            'Intitule' => 'Virement bancaire',
        ]);

        TypePayement::create([
            'Intitule' => 'Espèces',
        ]);
    }
}
