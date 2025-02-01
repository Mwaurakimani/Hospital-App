<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::get('/bookPatientIn',[AppointmentController::class,'bookPatientIn'])->name('bookPatientIn');
