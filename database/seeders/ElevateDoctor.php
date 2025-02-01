<?php

namespace Database\Seeders;

use App\Models\Doctors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElevateDoctor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors_ids = DB::select(
            "select id
                    from users
                    where role_id in (
                            select id
                            from roles
                            where name = 'Doctor'
                    )"
        );

        foreach ($doctors_ids as $doctors_id) {
            Doctors::create(["user_id" => $doctors_id->id,'practice'=>'Dentist']);
        }

        dump('Done Elevating');
    }
}
