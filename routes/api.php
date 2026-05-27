<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\TaskController;

// =========================
// AUTH
// =========================

// Login social
Route::post('/login/social', [AuthController::class, 'socialLogin']);


// =========================
// USER
// =========================

// Ambil data user login
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json([
        'success' => true,
        'data' => $request->user()
    ]);
});


// =========================
// TASK CRUD
// =========================

// Ambil semua task
Route::get('/tasks', [TaskController::class, 'index']);

// Ambil task berdasarkan ID
Route::get('/tasks/{id}', [TaskController::class, 'show']);

// Tambah task
Route::post('/tasks', [TaskController::class, 'store']);

// Update task
Route::put('/tasks/{id}', [TaskController::class, 'update']);

// Tandai task selesai
Route::patch('/tasks/{id}/complete', [TaskController::class, 'complete']);

// Hapus task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);