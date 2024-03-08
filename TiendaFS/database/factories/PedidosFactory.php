<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
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
            'fechaPedido' => fake()->date(),
            'total' => fake()->numberBetween(1, 100000),
            'estado' => fake()->words(3, true),
        ];
    }
}
