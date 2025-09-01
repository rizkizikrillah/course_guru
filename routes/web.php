<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

// Root redirect
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('course.index');
    }
    return redirect()->route('login');
});

// Login page
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Course
    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course/{section}/{slug}', [CourseController::class, 'show'])->name('course.show');
    Route::post('/course/{id}/complete', [CourseController::class, 'complete'])->name('course.complete');
    Route::post('/course/{id}/next', [CourseController::class, 'nextLesson'])->name('course.next');
});

require __DIR__ . '/auth.php';
