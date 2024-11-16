<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder pour des test
        $this->call([
            ClientTableSeeder::class,
            HebergementTableSeeder::class,
            PayementFactureTableSeeder::class,
            PayementPayementTableSeeder::class,

        ]);
    }
}
