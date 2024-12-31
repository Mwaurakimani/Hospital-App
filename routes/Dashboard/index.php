<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () {
        $doctors = 10;
        $patients = 20;
        $appointments = 30;

        return Inertia::render('Dashboard', [
            'stats' => [
                'doctors' => $doctors,
                'patients' => $patients,
                'appointments' => $appointments
            ],
        ]);
    })->name('dashboard');

    include_once 'Roles/index.php';

});
