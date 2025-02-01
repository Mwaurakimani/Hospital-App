<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    include_once 'Doctors/index.php';
    include_once 'Patients/index.php';
    include_once 'Roles/index.php';
    include_once 'Users/index.php';
    include_once 'Appointments/index.php';
});
