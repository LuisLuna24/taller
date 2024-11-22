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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_carrito');
            $table->foreign('id_carrito')->references('id')->on('carritos')->onDelete('cascade');
            $table->unsignedBigInteger('id_ubicacion');
            $table->foreign('id_ubicacion')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->decimal('precio_total', 10, 2);
            $table->integer('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
