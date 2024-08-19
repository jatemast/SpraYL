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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del modelo
            $table->foreignId('marca_id')->constrained('marcas')->onDelete('cascade'); // Relación con la tabla marcas
            $table->year('year'); // Año del modelo
            $table->integer('usage_rank')->nullable(); // Ranking de uso (opcional)
            $table->decimal('price', 10, 2); // Precio del modelo
            $table->string('color'); // Color del modelo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
