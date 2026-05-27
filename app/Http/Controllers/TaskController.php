<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Tambah task
public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'required|integer',
        'category' => 'required|string',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'deadline' => 'required|date',
        'priority' => 'required|string',
        'is_completed' => 'boolean'
    ]);

    $task = Task::create($validated);

    return response()->json([
        'message' => 'Task berhasil ditambahkan',
        'data' => $task
    ], 201);
}
    // Menampilkan semua task
    public function index(Request $request)
    {
        $query = Task::query();

        // Filter status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Filter priority
        if ($request->has('priority')) {
            $query->where('priority', $request->priority);
        }

        // Filter deadline
        if ($request->has('deadline')) {
            $query->whereDate('due_date', $request->due_date);
        }

        // Filter category
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        // Sorting aman
        $allowedSorts = ['deadline', 'priority', 'title'];

        if ($request->has('sort') && in_array($request->sort, $allowedSorts)) {
            $query->orderBy($request->sort, 'asc');
        }

        return response()->json(
            $query->get()
        );
    }

    // Menampilkan task berdasarkan ID
    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Task tidak ditemukan'
            ], 404);
        }

        return response()->json($task);
    }

    // Update task
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Task tidak ditemukan'
            ], 404);
        }

$validated = $request->validate([
    'user_id' => 'sometimes|integer',
    'category' => 'sometimes|string',
    'title' => 'sometimes|string|max:255',
    'description' => 'nullable|string',
    'deadline' => 'sometimes|date',
    'priority' => 'sometimes|string',
    'is_completed' => 'sometimes|boolean'
]);

        $task->update($validated);

        return response()->json([
            'message' => 'Task berhasil diupdate',
            'data' => $task
        ]);
    }

    // Menandai task selesai
public function complete($id)
{
    $task = Task::find($id);

    if (!$task) {
        return response()->json([
            'message' => 'Task tidak ditemukan'
        ], 404);
    }

    $task->is_completed = true;
    $task->save();

    return response()->json([
        'message' => 'Task selesai',
        'data' => $task
    ]);
}

    // Hapus task
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Task tidak ditemukan'
            ], 404);
        }

        $task->delete();

        return response()->json([
            'message' => 'Task berhasil dihapus'
        ]);
    }
}