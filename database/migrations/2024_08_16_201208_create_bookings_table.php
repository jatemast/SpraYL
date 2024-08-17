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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 255)->nullable();
            $table->string('modelo', 255)->nullable();
            $table->integer('anio')->nullable(); // Asegúrate de que el año tenga un valor entero de 4 dígitos
            $table->string('color', 255)->nullable();
            $table->string('servicio_extra', 255)->nullable();
            $table->string('nombre', 255)->nullable();
            $table->date('fecha')->nullable();
            $table->string('nombre_cliente', 255)->nullable();
            $table->string('apellido_cliente', 255)->nullable();
            $table->string('email_cliente', 255)->nullable();
            $table->string('telefono_cliente', 20)->nullable();
            $table->string('direccion_cliente', 255)->nullable();
            $table->string('ciudad_cliente', 255)->nullable();
            $table->string('estado_servico', 255)->nullable();
            $table->string('codigo_postal_cliente', 10)->nullable();
            $table->text('peticion_cliente')->nullable();
            $table->text('descripcion_servicio')->nullable();
            $table->boolean('dirt_charges')->nullable();
            $table->boolean('acepto_veicle')->nullable();
            $table->boolean('la_tos')->nullable();
            $table->date('fecha_servicio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
