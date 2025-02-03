<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public $data = [];

    public function __invoke(Request $request)
    {

        switch ($this->getAccountType()) {
            case 'Nurse':
                $this->data['appointments'] = (Appointment::with(['doctor','patient'])->get());
                break;
        }

        return Inertia::render('Dashboard',[
            'dashboardData' => $this->data,
        ]);
    }

    function getAccountType()
    {
        return Auth::user()->account_type;
    }

    function show($data)
    {
        Debugbar::addMessage($this->data);
    }
}
