<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
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
            'tipoProducto' => fake()->words(1, true),
            'imagen' => fake()->imageUrl(),
            'proveedores_idProveedor' => \App\Models\Proveedores::factory(),
            'descripcion' => fake()->sentence(),
            'precio' => fake()->numberBetween(1, 100000),
            'stock' => fake()->randomNumber(),
        ];
    }
}
