<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DoctorController extends Controller
{
    public function HomeDoctors(): \Inertia\Response
    {
        Debugbar::info('Doctors');
        return Inertia::render('Home/Doctors');
    }

    public function getAllDoctors(): array
    {
        return [true];
    }

    public function storeDoctor(Request $request)
    {
        return $request;
    }

    public function getDoctor()
    {

    }

    public function patchDoctor()
    {

    }

    public function deleteDoctor()
    {

    }
}
