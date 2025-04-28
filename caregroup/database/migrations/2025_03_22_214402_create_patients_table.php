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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_profile')->nullable();
            $table->string('patient_name')->requried();
            $table->string('patient_email')->requried()->unique();
            $table->unsignedBigInteger('patient_phone')->requried();
            $table->integer('patient_age')->unsigned()->requried();
            $table->string('patient_diseases')->requried();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
