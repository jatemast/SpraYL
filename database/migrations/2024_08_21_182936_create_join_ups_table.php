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
            $table->string('fullName')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('previousExperience', 3)->nullable(); // Solo acepta "Yes" o "No"
            $table->text('experienceDescription')->nullable();
            $table->string('hasOwnTransportation', 3)->nullable(); // Solo acepta "Yes" o "No"
            $table->string('doesWorkWeekendsAndHolidays', 3)->nullable(); // Solo acepta "Yes" o "No"
            $table->json('daysAvailableToWork')->nullable(); // Almacena un array en formato JSON
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
