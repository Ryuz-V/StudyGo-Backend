<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::with('category')->get();
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'is_completed' => false
        ]);

        return response()->json([
            'message' => 'Task added',
            'data' => $task
        ]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated'
        ]);
    }

    public function destroy($id)
    {
        Task::destroy($id);

        return response()->json([
            'message' => 'Task deleted'
        ]);
    }

    public function complete($id)
    {
        $task = Task::findOrFail($id);

        $task->is_completed = true;

        $task->save();

        return response()->json([
            'message' => 'Task completed'
        ]);
    }

    public function retrieve($id)
    {
        $task = Task::findOrFail($id);

        $task->is_completed = false;

        $task->save();

        return response()->json([
            'message' => 'Task retrieved'
        ]);
    }


    // TASK COMPLETED
    public function completed()
    {
        $tasks = Task::where('is_completed', 1)
                    ->with('category')
                    ->get();

        return response()->json($tasks);
    }


    // TASK PENDING
    public function pending()
    {
        $tasks = Task::where('is_completed', 0)
                    ->with('category')
                    ->get();

        return response()->json($tasks);
    }


    // TASK BERDASARKAN CATEGORY
    public function byCategory($id)
    {
        $tasks = Task::where('category_id', $id)
                    ->with('category')
                    ->get();

        return response()->json($tasks);
    }


    // SEARCH TASK
    public function search(Request $request)
    {
        $keyword = $request->q;

        $tasks = Task::where('title', 'LIKE', "%$keyword%")
                    ->orWhere('description', 'LIKE', "%$keyword%")
                    ->with('category')
                    ->get();

        return response()->json($tasks);
    }
}