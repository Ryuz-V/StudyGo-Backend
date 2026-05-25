<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Pemilik tugas
        $table->string('title'); // Nama tugas
        $table->date('due_date')->nullable(); // Tenggat waktu
        $table->string('category')->default('Tugas'); // Wishlist, Kerja, dll
        $table->boolean('is_completed')->default(false); // Status selesai/belum
        $table->timestamps();

        // Relasi ke tabel users
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
