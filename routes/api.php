<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;


Route::middleware(EnsureFrontendRequestsAreStateful::class)
    ->group(callback: function () {

        Route::post('/login', [AuthController::class, 'login']);

        Route::get('/logout', [AuthController::class, 'logout'])->middleware(['middleware' => 'auth:sanctum']);

        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

            Route::resource('roles', RolesController::class);
            Route::resource('users', UsersController::class);

        });
    });


Route::prefix('/doctor')->group(function () {
    Route::get('/all', [DoctorController::class, 'getAllDoctors']);
    Route::post('/store', [DoctorController::class, 'storeDoctor']);
    Route::get('/{doctor}', [DoctorController::class, 'getDoctor']);
    Route::put('/{doctor}', [DoctorController::class, 'patchDoctor']);
    Route::delete('/{doctor}', [DoctorController::class, 'deleteDoctor']);
});

Route::prefix('/patient')->group(function () {
    Route::get('/all', [PatientController::class, 'getAllPatients']);
    Route::post('/store', [PatientController::class, 'storePatient']);
    Route::get('/{patient}', [PatientController::class, 'getPatient']);
    Route::put('/{patient}', [PatientController::class, 'patchPatient']);
    Route::delete('/{patient}', [PatientController::class, 'deletePatient']);
});

Route::prefix('/appointment')->group(function () {
    Route::get('/all', [AppointmentController::class, 'getAllAppointment']);
    Route::post('/store', [AppointmentController::class, 'storeAppointment']);
    Route::get('/{appointment}', [AppointmentController::class, 'getAppointment']);
    Route::put('/{appointment}', [AppointmentController::class, 'patchAppointment']);
    Route::delete('/{appointment}', [AppointmentController::class, 'deleteAppointment']);
});

Route::prefix('/lab')->group(function () {
    Route::get('/all', [LabController::class, 'getAllAppointment']);
    Route::post('/store', [LabController::class, 'storeAppointment']);
    Route::get('/{lab}', [LabController::class, 'getAppointment']);
    Route::put('/{lab}', [LabController::class, 'patchAppointment']);
    Route::delete('/{lab}', [LabController::class, 'deleteAppointment']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
