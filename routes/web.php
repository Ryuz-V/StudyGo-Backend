<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $total_users = \App\Models\User::count();
    $latest_users = \App\Models\User::latest()->take(5)->get(); // Get 5 newest users
    
    return view('index', compact('total_users', 'latest_users'));
});
