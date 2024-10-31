<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeHebergement;

class TypeHebergementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeHebergement::create([
            'Intitule' => 'Hôtel',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Maison',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Appartement',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Camping',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Auberge',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Hôtel de luxe',
        ]);

        TypeHebergement::create([
            'Intitule' => 'Cabane dans les arbres',
        ]);
    }
}
