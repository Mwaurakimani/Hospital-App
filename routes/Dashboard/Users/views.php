<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/create', function () {
    return Inertia::render('Dashboard/Users/create');
})->name('create');

Route::get('/', function () {
    $users = User::all();

    return Inertia::render('Dashboard/Users/index', [
        'users' => $users,
    ]);
})->name('list');

Route::get('/{user}', function (User $user) {
    if($user->account_type == 'Doctor'){
        $user->load('appointments');

        $user->appointments->map(function ($appointment) {
            $appointment->patient = User::find($appointment->patient_id);
            return $appointment;
        });
    }

    return Inertia::render('Dashboard/Users/view', [
        'user' => $user->only('id', 'name', 'email','account_type'),
        'appointments' => $user->appointments ?? null,
    ]);
})->name('view');
