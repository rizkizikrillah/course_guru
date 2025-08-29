<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // Judul BAB
            $table->string('slug')->unique(); // URL friendly
            $table->string('title'); // Judul sub bab
            $table->longText('content'); // Isi materi / sub bab
            $table->integer('order')->default(1); // Urutan tampil
            $table->string('link')->nullable(); // URL dokumen
            $table->string('video')->nullable(); // URL video
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};