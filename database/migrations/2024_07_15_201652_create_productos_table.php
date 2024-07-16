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

            $table->integer('codproveedor')->nullable();
            $table->integer('codcategoria')->nullable();
            $table->string('nombreproducto')->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('unidadmedida')->nullable();
            $table->decimal('preciocompra',10,2)->nullable();
            $table->decimal('precioventa',10,2)->nullable();
            $table->string('img')->nullable();
            $table->string('descontinuados')->nullable();
            $table->integer('cantidadactual')->nullable();

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
