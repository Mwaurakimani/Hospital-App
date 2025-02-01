<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('Home')->as('Home.index.')->group(function () {

    Route::get('/doctors', [DoctorController::class,'HomeDoctors'])->name('Doctors');

    Route::get('/procedures', function () {
        return Inertia::render('Welcome');
    })->name('Procedures');
});
