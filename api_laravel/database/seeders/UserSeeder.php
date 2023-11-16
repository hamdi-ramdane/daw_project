<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        
        \DB::table('user')->insert([
            ['first_name' => 'Rick', 'last_name' => 'Sanchez','username' => 'rickSanches', 'gender' => 'Male', 'date_of_birth' => '1958-05-16', 'email' => 'rick@example.com', 'passwd' => 'WubbaLubbaDubDub', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Morty', 'last_name' => 'Smith','username' => 'mortysmith', 'gender' => 'Male', 'date_of_birth' => '2002-03-12', 'email' => 'morty@example.com', 'passwd' => 'OhGeez', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Walter', 'last_name' => 'White','username' => 'Walterwhite', 'gender' => 'Male', 'date_of_birth' => '1965-07-30', 'email' => 'walter@example.com', 'passwd' => 'Heisenberg', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Jesse', 'last_name' => 'Pinkman','username' => 'jessepinkguy', 'gender' => 'Male', 'date_of_birth' => '1984-01-21', 'email' => 'jesse@example.com', 'passwd' => 'YoBitch', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Gus', 'last_name' => 'Fring','username' => 'gustavothefrang', 'gender' => 'Male', 'date_of_birth' => '1956-11-23', 'email' => 'gus@example.com', 'passwd' => 'LosPollosHermanos', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Skyler', 'last_name' => 'White','username' => 'skylerwhiteYO', 'gender' => 'Female', 'date_of_birth' => '1970-09-18', 'email' => 'skyler@example.com', 'passwd' => 'MoneyLaundering', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Hank', 'last_name' => 'Schrader','username' => 'kindasuslately', 'gender' => 'Male', 'date_of_birth' => '1969-03-15', 'email' => 'hank@example.com', 'passwd' => 'Minerals', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Hector', 'last_name' => 'Salamanca','username' => 'lookatmehector', 'gender' => 'Male', 'date_of_birth' => '1940-02-21', 'email' => 'hector@example.com', 'passwd' => 'DingDing', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Peter', 'last_name' => 'Griffin','username' => 'eypeeta', 'gender' => 'Male', 'date_of_birth' => '1970-06-06', 'email' => 'peter@example.com', 'passwd' => 'FreakinSweet', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Lois', 'last_name' => 'Griffin','username' => 'yeslois', 'gender' => 'Female', 'date_of_birth' => '1974-12-22', 'email' => 'lois@example.com', 'passwd' => 'FamilyGuy123', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Stewie', 'last_name' => 'Griffin','username' => 'stewie2k', 'gender' => 'Male', 'date_of_birth' => '2001-04-03', 'email' => 'stewie@example.com', 'passwd' => 'VictoryIsMine', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Brian', 'last_name' => 'Griffin','username' => 'briandogystyle', 'gender' => 'Male', 'date_of_birth' => '1996-08-08', 'email' => 'brian@example.com', 'passwd' => 'GentlemanAndScholar', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Meg', 'last_name' => 'Griffin','username' => 'megladon', 'gender' => 'Female', 'date_of_birth' => '1995-01-13', 'email' => 'meg@example.com', 'passwd' => 'Megatron', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Glenn', 'last_name' => 'Quagmire','username' => 'gigidi', 'gender' => 'Male', 'date_of_birth' => '1959-12-08', 'email' => 'quagmire@example.com', 'passwd' => 'Giggity', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Saul', 'last_name' => 'Goodman','username' => 'slippingjimmy', 'gender' => 'Male', 'date_of_birth' => '1964-02-26', 'email' => 'saul@example.com', 'passwd' => 'BetterCallSaul', 'created_at' => now(), 'updated_at' => now()],
        ]); 
        
    }
}
