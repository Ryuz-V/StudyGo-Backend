<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login-google', [AuthController::class, 'googleLogin']);
Route::get('/users', [AuthController::class, 'getUsers']);
