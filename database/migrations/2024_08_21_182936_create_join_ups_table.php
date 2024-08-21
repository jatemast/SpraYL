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
        Schema::create('join_ups', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->date('birthdate');
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('email')->unique();
            $table->boolean('previousExperience');
            $table->text('experienceDescription')->nullable();
            $table->string('hasOwnTransportation', 2); // Solo acepta "Si" o "No"
            $table->string('doesWorkWeekendsAndHolidays', 2); // Solo acepta "Si" o "No"
            $table->json('daysAvailableToWork'); // Almacena un array en formato JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_ups');
    }
};
