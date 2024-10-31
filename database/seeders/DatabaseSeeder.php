<?php

namespace Database\Seeders;

use App\Models\MoyenTransport;
use App\Models\StatutFacture;
use App\Models\StatutPayement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EquipementSeeder::class);
        $this->call(TypeForfaitVoyageSeeder::class);
        $this->call(TypeSiegeAvionSeeder::class);
        $this->call(TypeSiegeTrainSeeder::class);
        $this->call(MoyenTransportSeeder::class);
        $this->call(TypePayementSeeder::class);
        $this->call(TypeHebergementSeeder::class);
        $this->call(CategorieClientForfaitSeeder::class);
        $this->call(StatutPayementSeeder::class);
        $this->call(StatutFactureSeeder::class);
    }
}
