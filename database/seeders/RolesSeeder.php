<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Guest','Patient','Doctor','Administrator'];

        foreach ($roles as $role) {
            $role_model = new Roles();

            $role_model->name = $role;
            $role_model->save();
        }

        dump("Roles Created successfully.");
    }
}
