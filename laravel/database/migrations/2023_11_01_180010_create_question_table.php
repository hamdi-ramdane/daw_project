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
        Schema::create('question', function (Blueprint $table) {
            $table->id('question_id');
            $table->text('text');
            $table->enum('type', ['Multiple Choice', 'Open Text', 'True/False', 'Other']);
            $table->json('options')->nullable();
            $table->integer('points');
            $table->integer('display_order');
            $table->json('dependencies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
