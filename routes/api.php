<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login/social', [AuthController::class, 'socialLogin']);

// Example route to get logged-in user details using Sanctum middleware
Route::middleware('auth:sanctum')->get('/user', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'success' => true,
        'data' => $request->user()
    ]);
});
