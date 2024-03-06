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
        Schema::create('ofertas_especiales', function (Blueprint $table) {
            $table->id();
            $table->string('nombreOferta');
            $table->text('descripcion');
            $table->decimal('descuento');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas_especiales');
    }
};
