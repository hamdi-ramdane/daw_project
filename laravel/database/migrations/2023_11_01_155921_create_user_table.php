<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id'); // Auto-incrementing primary key
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->enum('gender', ['Male', 'Female']);
            $table->date('date_of_birth')->nullable(); // Date of birth can be NULL
            $table->string('email', 255)->unique();
            $table->string('passwd', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
