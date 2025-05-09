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
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->string('name')->required();
        $table->string('email')->unique()->required();
        $table->bigInteger('phone')->nullable(false)->required();
        $table->integer('age')->required();
        $table->string('diseases')->required();
        $table->string('adress')->nullable();
        $table->date('date')->nullable(false)->required();
        $table->time('time')->nullable(false)->required();
        $table->string('doctor_name')->required();
        $table->text('message')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
