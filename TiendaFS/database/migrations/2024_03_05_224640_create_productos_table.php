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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('tipoProducto');
            $table->unsignedBigInteger('proveedores_idProveedor');
            $table->foreign('proveedores_idProveedor')->references('id')->on('proveedores')->onDelete('cascade');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->integer('stock');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
