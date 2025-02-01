<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $users = [
            [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 1,
                'password' => bcrypt('password'),
            ],
            [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 2,
                'password' => bcrypt('password'),

            ],
            [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 3,
                'password' => bcrypt('password'),
            ],
            [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 4,
                'password' => bcrypt('password'),
            ],
            [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 5,
                'password' => bcrypt('password'),
            ]
        ];

        $this->create_admin($faker);

        foreach ($users as $user) {
            User::create($user);
        }

        dump("UserSeeder ran successfully");
    }

    public function create_admin($faker)
    {
        $user = User::where('email', 'admin@email.com')->first();

        if ($user === null) {
            User::create([
                'first_name' => "Admin",
                'last_name' => "Admin",
                'middle_name' => "Admin",
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => 'admin@email.com',
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'role_id' => 5,
                'password' => bcrypt('password'),
            ]);
            return;
        }
    }
}
