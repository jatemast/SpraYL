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
            $table->index('marca_id');
            $table->index('modelo_id');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->foreignId('modelo_id')->references('id')->on('modelos');
            $table->integer('anio')->nullable();
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
            $table->boolean('dirt_charges')->default(false);
            $table->boolean('acepto_veicle')->default(false);
            $table->boolean('la_tos')->default(false);
            $table->double('precio_estimado')->default(false);
            $table->integer('tiempo_estimado')->default(false);
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
