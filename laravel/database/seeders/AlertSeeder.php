<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AlertSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('alert')->insert([
            ['patient_id' => 1, 'alert_date' => '2023-11-06 08:15:00', 'alert_type' => 'Critical', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 2, 'alert_date' => '2023-11-06 10:30:00', 'alert_type' => 'High', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 3, 'alert_date' => '2023-11-06 12:45:00', 'alert_type' => 'Medium', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 4, 'alert_date' => '2023-11-06 14:20:00', 'alert_type' => 'Low', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 5, 'alert_date' => '2023-11-06 16:55:00', 'alert_type' => 'Critical', 'created_at' => now(), 'updated_at' => now()]       
        ]);
    }
}
