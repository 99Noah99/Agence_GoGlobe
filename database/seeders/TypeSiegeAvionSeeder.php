<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeSiegeAvion;

class TypeSiegeAvionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeSiegeAvion::create([
            'Categorie' => 'Classe Standard',
        ]);

        TypeSiegeAvion::create([
            'Categorie' => 'Classe Affaire',
        ]);

        TypeSiegeAvion::create([
            'Categorie' => 'Classe Business',
        ]);
    }
}
