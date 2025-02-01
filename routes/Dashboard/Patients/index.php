<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/Dashboard/Patients')->as('dashboard.patients.')->group(function () {
    include_once 'views.php';
    include_once 'actions.php';
});
