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
        Schema::create('carrito_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_carrito');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_carrito')->references('id')->on('carritos')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->decimal('precio_total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_productos');
    }
};
