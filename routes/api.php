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

Route::post('/garage', [GarageController::class, 'addGarage']);
Route::put('/update-garage/{id}', [GarageController::class, 'addGarageUpdate']);
Route::delete('/delete-garage/{id}', [GarageController::class, 'addGarageDelete']);
