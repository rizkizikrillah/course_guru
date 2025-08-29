<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // course
    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course/{section}/{slug}', [CourseController::class, 'show'])->name('course.show');
    Route::post('/course/{id}/complete', [CourseController::class, 'complete'])->name('course.complete');
    Route::post('/course/{id}/next', [CourseController::class, 'nextLesson'])->name('course.next');
});

require __DIR__ . '/auth.php';