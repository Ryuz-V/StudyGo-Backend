<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class AuthController extends Controller
{
    public function socialLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'provider_name' => 'required|string', // google or apple
            'provider_id' => 'required|string',
            'avatar' => 'nullable|string',
        ]);

        // Find existing user or create a new one
        $user = \App\Models\User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'provider_name' => $request->provider_name,
                'provider_id' => $request->provider_id,
                'avatar' => $request->avatar,
                'password' => null, // Users using social login might not have a password
            ]
        );

        // Update provider details if they changed
        if ($user->provider_id !== $request->provider_id || $user->provider_name !== $request->provider_name) {
            $user->update([
                'provider_id' => $request->provider_id,
                'provider_name' => $request->provider_name,
                'avatar' => $request->avatar,
            ]);
        }

        // Generate token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'data' => [
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer'
            ]
        ], 200);
    }
}