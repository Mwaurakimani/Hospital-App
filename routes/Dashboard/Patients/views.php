<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $users = User::with('appointments')->get();

    return Inertia::render('Dashboard/Patients/index', [
        'users' => $users,
    ]);
})->name('list');

Route::get('/{user}', function (User $user) {
    return Inertia::render('Dashboard/Users/view', [
        'user' => $user->only('id', 'name', 'email','account_type'),
    ]);
})->name('view');
