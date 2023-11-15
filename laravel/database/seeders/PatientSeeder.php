<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
       \DB::table('patient')->insert([
            ['user_id' => 1, 'addiction_score' => 32, 'depression_score' => 20, 'adhd_score' => 80, 'insomnia_score' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'addiction_score' => 21, 'depression_score' => 15, 'adhd_score' => 70, 'insomnia_score' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'addiction_score' => 45, 'depression_score' => 25, 'adhd_score' => 100, 'insomnia_score' => 43, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'addiction_score' => 52, 'depression_score' => 35, 'adhd_score' => 150, 'insomnia_score' => 55, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'addiction_score' => 11, 'depression_score' => 10, 'adhd_score' => 40, 'insomnia_score' => 39, 'created_at' => now(), 'updated_at' => now()],
        ]); 
        
    }
}
