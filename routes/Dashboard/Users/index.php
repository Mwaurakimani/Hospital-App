<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/Dashboard/Users')->as('dashboard.users.')->group(function () {
    include_once 'views.php';
    include_once 'actions.php';
});
