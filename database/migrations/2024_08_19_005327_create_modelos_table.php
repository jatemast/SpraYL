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
        $table->string('name');
        $table->foreignId('marca_id')->constrained('marcas')->onDelete('cascade');
        $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
        $table->year('year');
        $table->string('color');
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
