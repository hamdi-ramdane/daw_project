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
        Schema::create('quiz_response', function (Blueprint $table) {
            $table->id('response_id');
            $table->unsignedBigInteger('quiz_id');
            $table->unsignedBigInteger('question_id');
            $table->string('answer', 255);
            $table->integer('score');
            $table->text('comments');
            $table->foreign('quiz_id')->references('quiz_id')->on('quiz');
            $table->foreign('question_id')->references('question_id')->on('question');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_response');
    }
};
