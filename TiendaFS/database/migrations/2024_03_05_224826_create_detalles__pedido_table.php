<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalles__pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('productos_idProducto');
            $table->unsignedBigInteger('pedidos_idPedido');

            // Define las claves foráneas
            $table->foreign('productos_idProducto')->references('id')->on('productos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('pedidos_idPedido')->references('id')->on('pedidos')->cascadeOnDelete()->cascadeOnUpdate();
            // Establece las dos claves foráneas como clave primaria compuesta
            $table->primary(['productos_idProducto', 'pedidos_idPedido']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pedidos');
    }
};
