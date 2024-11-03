<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pays;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Pays::factory()->count(10)->create(); // Crée 10 pays
    }
}
