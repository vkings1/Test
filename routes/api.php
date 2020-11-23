<?php

use App\Http\Controllers\AttendantController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/user')->group(function () {
    Route::post('/login', [LoginController::class, 'login']);
    Route::middleware('auth:api')->get('/users', [UserController::class, 'index']);
});

Route::post('/add-attendant', [AttendantController::class, 'addAttendant']);

Route::get('/garage', [GarageController::class, 'index']);
