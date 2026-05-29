<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $category = Category::create([
            'user_id' => $request->user_id,
            'name' => $request->name
        ]);

        return response()->json([
            'message' => 'Category added',
            'data' => $category
        ]);
    }
}