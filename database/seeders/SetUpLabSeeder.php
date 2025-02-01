<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetUpLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = Appointment::where('status', 0)->get();

        if (!$appointments->isEmpty()) {
            foreach ($appointments as $appointment) {
                $appointment->update(['status' => 1]);

                Lab::create([
                        'appointment_id' => $appointment->id,
                        'diagnosis' => 'diagnosis diagnosis diagnosis diagnosis diagnosis diagnosis diagnosis diagnosis',
                        'treatment' => 'treatment treatment treatment treatment treatment treatment treatment treatment',
                    ]
                );
            }
        }
    }
}
