<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function getAllPatients()
    {
        return User::where('role_id', 2)->get();
    }

    public function storePatient()
    {

    }

    public function getPatient()
    {

    }

    public function patchPatient()
    {

    }

    public function deletePatient()
    {

    }
}
