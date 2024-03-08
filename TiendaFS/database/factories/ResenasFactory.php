<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resenas>
 */
class ResenasFactory extends Factory
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
            'usuarios_idUsuario' => \App\Models\Users::factory(),
            'productos_idProducto' => \App\Models\Productos::factory(),
            'puntuacion' => fake()->randomNumber(),
            'comentario' => fake()->sentence(),
            'fechaResena' => fake()->date(),
        ];
    }
}
