<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\LabChallengeController;

// Root redirect
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('modul.index'); // Ubah ke modul.index
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

    // Course routes (opsional, tetap ada jika diperlukan)
    Route::get('/course1', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course1/{section}/{slug}', [CourseController::class, 'show'])->name('course.show');
    Route::post('/course1/{id}/complete', [CourseController::class, 'complete'])->name('course.complete');
    Route::post('/course1/{id}/next', [CourseController::class, 'nextLesson'])->name('course.next');

    // Tambahkan rute modul di dalam middleware auth
    Route::get('/modul', [ModulController::class, 'index'])->name('modul.index');

});

require __DIR__ . '/auth.php';
