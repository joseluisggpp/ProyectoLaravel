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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->foreign('usuarios_idUsuario')->references('id')->on('usuarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('asunto');
            $table->text('descripcion');
            $table->string('estado');
            $table->date('fechaCreacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
