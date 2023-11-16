<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('quiz')->insert([
            ['patient_id' => 1, 'quiz_date' => '2023-11-01', 'quiz_score' => 75, 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 2, 'quiz_date' => '2023-11-02', 'quiz_score' => 92, 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 3, 'quiz_date' => '2023-11-03', 'quiz_score' => 60, 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 4, 'quiz_date' => '2023-11-04', 'quiz_score' => 85, 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 5, 'quiz_date' => '2023-11-05', 'quiz_score' => 78, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
