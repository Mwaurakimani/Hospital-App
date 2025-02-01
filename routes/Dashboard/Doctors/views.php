<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $users = User::with('appointments')->where('role_id',
        DB::table('roles')->where('name', 'doctor')->first()->id
    )->get();

    $users->map(function ($user) {
        $user->appointments_count = count($user->appointments);
        return $user;
    });

    return Inertia::render('Dashboard/Doctors/index', [
        'users' => $users,
    ]);
})->name('list');

Route::get('/{user}', function (User $user) {
    return Inertia::render('Dashboard/Users/view', [
        'user' => $user->only('id', 'name', 'email','account_type'),
    ]);
})->name('view');
