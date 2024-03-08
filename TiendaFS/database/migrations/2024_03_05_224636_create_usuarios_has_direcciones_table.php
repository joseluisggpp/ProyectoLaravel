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
        Schema::create('user_has__direcciones', function (Blueprint $table) {
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->unsignedBigInteger('direcciones_idDireccion');

            // Define las claves foráneas
            $table->foreign('usuarios_idUsuario')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('direcciones_idDireccion')->references('id')->on('direcciones')->cascadeOnDelete()->cascadeOnUpdate();

            // Establece las dos claves foráneas como clave primaria compuesta
            $table->primary(['usuarios_idUsuario', 'direcciones_idDireccion']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_has_direcciones');
    }
};
