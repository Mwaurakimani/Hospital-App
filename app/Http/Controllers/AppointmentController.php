<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    public function bookPatientIn(): \Inertia\Response
    {
        return Inertia::render('Dashboard/Appointments/create');
    }
}
