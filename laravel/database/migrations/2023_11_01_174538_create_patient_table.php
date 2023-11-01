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
            Schema::create('patient', function (Blueprint $table) {
            $table->id('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('addiction_level')->unsigned()->check('addiction_level >= 1 AND addiction_level <= 5');
            $table->integer('avg_hours_week')->unsigned()->check('avg_hours_week <= 168');
            $table->integer('avg_hours_month')->unsigned()->check('avg_hours_month <= 730');
            $table->integer('insomnia_score')->unsigned()->check('insomnia_score >= 1 AND insomnia_score <= 5');
            $table->integer('sleepiness_score')->unsigned()->check('sleepiness_score >= 1 AND sleepiness_score <= 5');
            $table->integer('anxiety_score')->unsigned()->check('anxiety_score >= 1 AND anxiety_score <= 5');
            $table->integer('depression_score')->unsigned()->check('depression_score >= 1 AND depression_score <= 5');
            $table->foreign('user_id')->references('user_id')->on('user');
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
