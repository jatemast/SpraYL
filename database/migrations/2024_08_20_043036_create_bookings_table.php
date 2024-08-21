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
            $table->longText('servicio_extra')->nullable();
            $table->date('fecha')->nullable();
            $table->string('nombre_cliente', 255)->nullable();
            $table->string('apellido_cliente', 255)->nullable();
            $table->string('email_cliente', 255)->nullable();
            $table->string('telefono_cliente', 20)->nullable();
            $table->string('direccion_cliente', 255)->nullable();
            $table->string('ciudad_cliente', 255)->nullable();
            $table->string('estado_cliente', 255)->nullable();
            $table->string('codigo_postal_cliente', 10)->nullable();
            $table->text('peticion_cliente')->nullable();
            $table->text('descripcion_servicio')->nullable();
            $table->string('dirt_charges')->default('YES');
            $table->string('acepto_veicle')->default('YES');
            $table->string('la_tos')->default('YES');
            $table->double('precio_estimado')->default(false);
            $table->integer('tiempo_estimado')->default(false);
            $table->date('fecha_servicio')->nullable();
            $table->time('hora_servicio')->nullable();
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
