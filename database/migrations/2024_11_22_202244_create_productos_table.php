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
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->unsignedBigInteger('id_festividad');
            $table->foreign('id_festividad')->references('id')->on('festividades')->onDelete('cascade');
            $table->string('nombre', 50)->unique();
            $table->string('descripcion', 250);
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->integer('estatus')->default(1);
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
