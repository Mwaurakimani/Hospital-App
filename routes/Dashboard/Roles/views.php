<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $roles = \App\Models\Roles::all();

    return Inertia::render('Dashboard/Roles/index', [
        'roles' => $roles
    ]);
})->name('list');
