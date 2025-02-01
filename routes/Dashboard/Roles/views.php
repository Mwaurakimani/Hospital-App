<?php

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function (Request $request) {
    $queryRole = $request->query('role');

    $users = $queryRole
        ? User::where('role_id', $queryRole)->get()
        : User::all();

    $roles = Roles::all();

    return Inertia::render('Dashboard/Roles/index', [
        'roles' => $roles,
        'users' => $users,
    ]);
})->name('list');
