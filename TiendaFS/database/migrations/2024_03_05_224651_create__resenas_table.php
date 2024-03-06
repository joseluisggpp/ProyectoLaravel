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
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->unsignedBigInteger('productos_idProducto');
            $table->foreign('usuarios_idUsuario')->references('id')->on('usuarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('productos_idProducto')->references('id')->on('productos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('puntuacion');
            $table->text('comentario');
            $table->date('fechaResena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resenas');
    }
};
