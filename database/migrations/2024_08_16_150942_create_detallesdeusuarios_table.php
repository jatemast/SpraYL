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
        Schema::create('detallesdeusuarios', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('mail');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('condition_car');
            $table->string('specifications_car');
            $table->boolean('accept_terms')->default(false);
            $table->boolean('value_policy')->default(false);
            $table->boolean('accept_tos')->default(false);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallesdeusuarios');
    }
};
