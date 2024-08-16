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
            $table->string('marca');
            $table->string('modelo');
            $table->string('anio');
            $table->string('color');
            $table->string('servicio_extra');
            $table->string('nombre');
            $table->string('fecha');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('email_cliente');
            $table->string('telefono_cliente');
            $table->string('direccion_cliente');
            $table->string('ciudad_cliente');
            $table->string('estado_servico');
            $table->string('codigo_postal_cliente');
            $table->string('peticion_cliente');
            $table->string('descripcion_servicio');
            $table->boolean('dirt_charges');
            $table->boolean('acepto_veicle');
            $table->boolean('la_tos');
            $table->string('fecha_servicio');
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
