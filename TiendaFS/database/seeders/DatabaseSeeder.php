<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Users::factory(1)->create();
        \App\Models\Direcciones::factory(1)->create();
        \App\Models\Proveedores::factory(1)->create();
        \App\Models\Ofertas_Especiales::factory(1)->create();
        \App\Models\Pedidos::factory(1)->create();
        \App\Models\User_has_Direcciones::factory(1)->create();
        \App\Models\Productos::factory(1)->create();
        \App\Models\Resenas::factory(1)->create();
        \App\Models\Tickets::factory(1)->create();
        \App\Models\Detalles_Pedidos::factory(1)->create();
        \App\Models\Productos_has_Ofertas_Especiales::factory(1)->create();
    }
}
