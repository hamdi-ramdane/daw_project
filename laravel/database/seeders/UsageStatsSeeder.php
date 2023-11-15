<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsageStatsSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('usage_stats')->insert([
            ['user_id' => 1, 'stats_date' => '2023-01-10', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'stats_date' => '2023-01-12', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'stats_date' => '2023-01-15', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'stats_date' => '2023-01-20', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'stats_date' => '2023-01-25', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
