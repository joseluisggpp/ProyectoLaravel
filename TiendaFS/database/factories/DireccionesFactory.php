<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direcciones>
 */
class DireccionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'calle' => fake()->streetName(),
            'numero' => fake()->buildingNumber(),
            'ciudad' => fake()->city(),
            'codigoPostal' => fake()->postcode(),
            'pais' => fake()->country(),

        ];
    }
}
