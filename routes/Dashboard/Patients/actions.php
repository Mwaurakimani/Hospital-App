<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/sign_in_as/{user}', [UserController::class, 'sign_in_as'])->name('sign_in_as');

