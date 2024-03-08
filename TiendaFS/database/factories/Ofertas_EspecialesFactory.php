<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ofertas_Especiales>
 */
class Ofertas_EspecialesFactory extends Factory
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
            'nombreOferta' => fake()->words(3, true),
            'descripcion' => fake()->sentence(),
            'descuento' => fake()->numberBetween(5, 50),
            'fechaInicio' => fake()->date(),
            'fechaFin' => fake()->date(),
        ];
    }
}
