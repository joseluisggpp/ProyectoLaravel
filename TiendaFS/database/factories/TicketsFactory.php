<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
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
            'asunto' => fake()->sentence(),
            'descripcion' => fake()->sentence(),
            'estado' => fake()->sentence(),
            'fechaCreacion' => fake()->date(),
        ];
    }
}
