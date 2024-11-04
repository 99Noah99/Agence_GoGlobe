<?php

namespace Database\Factories;

use App\Models\Region;
use App\Models\Pays;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Region::class;

    public function definition()
    {
        return [
            'Nom' => $this->faker->unique()->state,
            // 'Id_Pays' => Pays::factory(), // Associe une région à un pays
        ];
    }
}
