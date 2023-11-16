<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('message')->insert([
            ['sender_id' => 1, 'receiver_id' => 2, 'content' => 'Hello, how are you?', 'message_date' => '2023-11-06 09:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['sender_id' => 2, 'receiver_id' => 1, 'content' => 'Im doing well, thanks!', 'message_date' => '2023-11-06 09:35:00', 'created_at' => now(), 'updated_at' => now()],
            ['sender_id' => 3, 'receiver_id' => 1, 'content' => 'Can you help me with a task?', 'message_date' => '2023-11-06 10:15:00', 'created_at' => now(), 'updated_at' => now()],
            ['sender_id' => 1, 'receiver_id' => 3, 'content' => 'Sure, what do you need?', 'message_date' => '2023-11-06 10:20:00', 'created_at' => now(), 'updated_at' => now()],
            ['sender_id' => 4, 'receiver_id' => 2, 'content' => 'Meeting tomorrow at 3 PM.', 'message_date' => '2023-11-06 12:45:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
