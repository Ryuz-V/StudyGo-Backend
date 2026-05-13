<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class AuthController extends Controller
{
    public function googleLogin(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $foto = $request->input('foto');

        DB::connection('mongodb')->collection('users')->insert([
            'name' => $nama,
            'email' => $email,
            'photo' => $foto,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Yey! Data berhasil disimpan ke MongoDB',
            'data' => [
                'name' => $nama,
                'email' => $email
            ]
        ], 201);
    }

    public function getUsers()
    {
        $users = DB::connection('mongodb')->collection('users')->get();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data dari MongoDB',
            'data' => $users
        ]);
    }
}