<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // TAMBAHKAN BARIS INI UNTUK MENGIZINKAN PENGISIAN DATA
    protected $fillable = [
        'user_id',
        'title',
        'category',
        'due_date',
        'is_completed'
    ];
}
