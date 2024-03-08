<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_has_Direcciones>
 */
class User_has_DireccionesFactory extends Factory
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
            'direcciones_idDireccion' => \App\Models\Direcciones::factory(),
        ];
    }
}
