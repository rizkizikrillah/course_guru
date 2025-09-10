<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('course2s', function (Blueprint $table) {
            $table->boolean('is_quiz')->default(false);
            $table->text('quiz_question')->nullable();
            $table->json('quiz_options')->nullable();
            $table->string('quiz_answer')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('course2', function (Blueprint $table) {
            $table->dropColumn(['is_quiz', 'quiz_question', 'quiz_options', 'quiz_answer']);
        });
    }
};
