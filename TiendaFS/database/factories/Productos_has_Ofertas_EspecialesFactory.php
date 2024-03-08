<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos_has_Ofertas_Especiales>
 */
class Productos_has_Ofertas_EspecialesFactory extends Factory
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
            'productos_idProducto' => \App\Models\Productos::factory(),
            'ofertas_especiales_idOferta_Especial' => \App\Models\Ofertas_Especiales::factory(),
        ];
    }
}
