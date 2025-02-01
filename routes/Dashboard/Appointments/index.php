<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::prefix('/Dashboard/Appointments')->as('dashboard.asppointments.')->group(function () {
    //TODO : fix these routes
    include_once 'views.php';
    include_once 'actions.php';
});
