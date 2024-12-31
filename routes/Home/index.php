<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('Home')->as('Home.')->group(function () {

    Route::get('/doctors', function () {
        return Inertia::render('Welcome');
    })->name('Doctors');

    Route::get('/procedures', function () {
        return Inertia::render('Welcome');
    })->name('Procedures');
});
