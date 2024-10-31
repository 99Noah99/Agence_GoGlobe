<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeSiegeTrain;

class TypeSiegeTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeSiegeTrain::create([
            'Categorie' => 'Première Classe',
        ]);

        TypeSiegeTrain::create([
            'Categorie' => 'Classe Affaire',
        ]);

        TypeSiegeTrain::create([
            'Categorie' => 'Classe Standard',
        ]);
    }
}
