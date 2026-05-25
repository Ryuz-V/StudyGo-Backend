<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TaskController;

// Route untuk Login
Route::post('/login/social', [AuthController::class, 'socialLogin']);

// Route untuk Kirim Tugas (SUDAH DIKELUARKAN & BERDIRI SENDIRI)
Route::post('/tasks', [TaskController::class, 'store']);


// Route untuk melihat data user yang sedang login (membutuhkan token Sanctum)
Route::middleware('auth:sanctum')->get('/user', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'success' => true,
        'data' => $request->user()
    ]);
});

Route::get('/tasks', [TaskController::class, 'index']);