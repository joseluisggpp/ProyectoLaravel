<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalles_Pedidos>
 */
class Detalles_PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productos_idProducto' => \App\Models\Productos::factory(),
            'pedidos_idPedido' => \App\Models\Pedidos::factory(),
        ];
    }
}
