<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);

        for ($i = 0; $i < 5; $i++) {
            $this->call(UserSeeder::class);
        }

        $this->call(ElevateDoctor::class);
        $this->call(AppointmentSeeder::class);
    }
}
