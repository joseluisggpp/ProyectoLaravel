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
        Schema::create('productos_has__ofertas__especiales', function (Blueprint $table) {
            $table->unsignedBigInteger('productos_idProducto');
            $table->unsignedBigInteger('ofertas_especiales_idOferta_Especial');

            // Define las claves foráneas
            $table->foreign('productos_idProducto')->references('id')->on('productos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ofertas_especiales_idOferta_Especial', 'fk_ofertas_especiales')->references('id')->on('ofertas_especiales')->cascadeOnDelete()->cascadeOnUpdate();
            // Establece las dos claves foráneas como clave primaria compuesta
            $table->primary(['productos_idProducto', 'ofertas_especiales_idOferta_Especial']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_has_ofertas_especiales');
    }
};
