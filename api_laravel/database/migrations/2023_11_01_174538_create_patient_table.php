<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('addiction_score')->unsigned()->check('insomnia_score >= 1 AND insomnia_score <= 100');
            $table->integer('depression_score')->unsigned()->check('insomnia_score >= 1 AND insomnia_score <= 100');
            $table->integer('adhd_score')->unsigned()->check('sleepiness_score >= 1 AND sleepiness_score <= 100');
            $table->integer('insomnia_score')->unsigned()->check('anxiety_score >= 1 AND anxiety_score <= 100');
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
