<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MoyenTransport;

class MoyenTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MoyenTransport::create([
            'Nom_mode_transport' => 'Avion',
        ]);

        MoyenTransport::create([
            'Nom_mode_transport' => 'Train',
        ]);

        MoyenTransport::create([
            'Nom_mode_transport' => 'Bus',
        ]);

        MoyenTransport::create([
            'Nom_mode_transport' => 'Voiture',
        ]);
    }
}
