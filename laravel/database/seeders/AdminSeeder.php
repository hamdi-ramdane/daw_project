<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        \DB::table('admin')->insert([
            ['user_id' => 11, 'admin_role' => 'Superadmin', 'permissions' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 12, 'admin_role' => 'Administrator', 'permissions' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 13, 'admin_role' => 'Moderator', 'permissions' => 3, 'created_at' => now(), 'updated_at' => now()],
         ]);
    }
}
