<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EquipementSeeder::class,
            TypeForfaitVoyageSeeder::class,
            TypeSiegeAvionSeeder::class,
            TypeSiegeTrainSeeder::class,
            MoyenTransportSeeder::class,
            TypePayementSeeder::class,
            TypeHebergementSeeder::class,
            CategorieClientForfaitSeeder::class,
            StatutPayementSeeder::class,
            StatutFactureSeeder::class,
            AdminSeeder::class,
            LocalisationSeeder::class,
            UsersTableSeeder::class,
            ClientTableSeeder::class
        ]);
    }
}
