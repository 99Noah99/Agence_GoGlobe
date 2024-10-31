<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeForfaitVoyage;

class TypeForfaitVoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeForfaitVoyage::create([
            'Nom' => 'Camping',
        ]);

        TypeForfaitVoyage::create([
            'Nom' => 'Montagne',
        ]);

        TypeForfaitVoyage::create([
            'Nom' => 'Plage',
        ]);

        TypeForfaitVoyage::create([
            'Nom' => 'Desert',
        ]);
    }
}
