<?php

namespace Database\Factories;

use App\Models\Ville;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ville>
 */
class VilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ville::class;

    public function definition()
    {
        return [
            'Nom' => $this->faker->city,
            'Id_Region' => Region::factory(), // Associe une ville à une région
        ];
    }
}
