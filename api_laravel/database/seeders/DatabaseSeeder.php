<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(AlertSeeder::class);
        $this->call(UsageStatsSeeder::class);
    }
}
