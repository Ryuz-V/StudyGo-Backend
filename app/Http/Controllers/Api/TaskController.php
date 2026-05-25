<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // FUNGSI 1: Untuk MENGAMBIL daftar tugas (index)
    public function index()
    {
        // Mengambil tugas milik user ID 1
        $tasks = Task::where('user_id', 1)->orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'data' => $tasks
        ]);
    }

    // FUNGSI 2: Untuk MENYIMPAN tugas baru (store)
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $request->validate([
            'title' => 'required|string',
            'user_id' => 'required|integer',
            'category' => 'nullable|string'
        ]);

        // 2. Simpan ke database
        $task = Task::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'category' => $request->category ?? 'Tugas',
            'is_completed' => false
        ]);

        // 3. Beri balasan ke Android kalau sukses
        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil disimpan!',
            'data' => $task
        ], 201);
    }
}