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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_profile')->nullable();
            $table->string('doctor_name')->requried();
            $table->string('doctor_email')->requried()->requried();
            $table->string('doctor_specialist')->requried();
            $table->string('doctor_description')->requried();
            $table->string('doctor_adress')->requried();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
