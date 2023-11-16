<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('doctor')->insert([
            ['user_id' => 6, 'specialty' => 'Cardiologist', 'schedualed_sessions' => 10, 'years_of_exp' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 7, 'specialty' => 'Pediatrician', 'schedualed_sessions' => 8, 'years_of_exp' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 8, 'specialty' => 'Dermatologist', 'schedualed_sessions' => 12, 'years_of_exp' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 9, 'specialty' => 'Psychiatrist', 'schedualed_sessions' => 6, 'years_of_exp' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 10, 'specialty' => 'Orthopedic Surgeon', 'schedualed_sessions' => 15, 'years_of_exp' => 25, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
