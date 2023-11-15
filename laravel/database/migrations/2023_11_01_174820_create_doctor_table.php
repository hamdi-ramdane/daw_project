<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->unsignedBigInteger('user_id');
            $table->string('specialty', 50);
            $table->integer('schedualed_sessions');
            $table->integer('years_of_exp');
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor');
    }
};
