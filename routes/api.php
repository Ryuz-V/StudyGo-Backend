<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::put('/tasks/{id}/complete', [TaskController::class, 'complete']);
Route::put('/tasks/{id}/retrieve', [TaskController::class, 'retrieve']);


// TAMBAHAN ENDPOINT
Route::get('/tasks/completed', [TaskController::class, 'completed']);
Route::get('/tasks/pending', [TaskController::class, 'pending']);
Route::get('/tasks/category/{id}', [TaskController::class, 'byCategory']);
Route::get('/tasks/search', [TaskController::class, 'search']);


Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::put('/profile/{id}', [ProfileController::class, 'update']);