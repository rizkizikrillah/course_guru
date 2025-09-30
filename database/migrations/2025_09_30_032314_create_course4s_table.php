<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('course4s', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('unit')->default(1);
            $table->string('slug')->unique();
            $table->string('section')->nullable(); // kolom section
            $table->text('content')->nullable();   // kolom content
            $table->string('icon')->nullable();
            $table->integer('order')->default(1);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course4s');
    }
};
