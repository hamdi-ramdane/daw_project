<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usage_stats', function (Blueprint $table) {
            $table->id('stats_id');
            $table->unsignedBigInteger('user_id');
            $table->date('stats_date');
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('usage_statistics');
    }
};
