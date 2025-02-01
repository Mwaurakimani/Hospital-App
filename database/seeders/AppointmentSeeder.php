<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = DB::select(
            "select id
                    from users
                    where role_id in (select id
                                      from roles
                                      where name = 'Doctor')
                    limit 1"
        );

        $patient = DB::select(
            "select id
                    from users where role_id in (
                        select id
                        from roles where name = 'Patient'
                        )
                    limit 1;"
        );



        Appointment::create([
            'doctor_id' => $doctor[0]->id,
            'patient_id' => $patient[0]->id,
            'date' => Carbon::now()->addWeek()->toDateString(), // Date a week from now in YYYY-MM-DD format
            'time' => Carbon::now()->addWeek()->toTimeString() // Time a week from now in HH:MM:SS format
        ]);

        dump('Appointment Created');

    }
}
