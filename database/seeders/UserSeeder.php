<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Guest',
                'email' => 'guest@example.com',
                'password' => bcrypt('password'),
                'role_id' => 1,
                'created_at' => '2024-12-27 14:09:46',
                'updated_at' => '2024-12-27 14:09:46',
            ],
            [
                'name' => 'Patient',
                'email' => 'patient@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'created_at' => '2024-12-27 14:09:46',
                'updated_at' => '2024-12-27 14:09:46',
            ],
            [
                'name' => 'Doctor',
                'email' => 'doctor@example.com',
                'password' => bcrypt('password'),
                'role_id' => 3,
                'created_at' => '2024-12-27 14:09:46',
                'updated_at' => '2024-12-27 14:09:46',
            ],
            [
                'name' => 'Administrator',
                'email' => 'administrator@example.com',
                'password' => bcrypt('password'),
                'role_id' => 4,
                'created_at' => '2024-12-27 14:09:46',
                'updated_at' => '2024-12-27 14:09:46',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        dump("UserSeeder ran successfully");
    }
}
