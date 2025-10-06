<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\Course2Controller;
use App\Http\Controllers\Course3Controller;
use App\Http\Controllers\Course4Controller;

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

    Route::get('/course2', [Course2Controller::class, 'index'])->name('course2.index');
    Route::get('/course2/{slug}', [Course2Controller::class, 'show'])->name('course2.show');

    Route::post('/course2/{id}/quiz/check', [Course2Controller::class, 'checkQuiz'])
        ->name('course2.quiz.check')
        ->middleware('auth');

    Route::get('/course3', [Course3Controller::class, 'index'])->name('course3.index');
    Route::get('/course3/{slug}', [Course3Controller::class, 'show'])->name('course3.show');

    Route::get('/course4', [Course4Controller::class, 'index'])->name('course4.index');

// Halaman show per materi/bab Course4
Route::get('/course4/{slug}', [Course4Controller::class, 'show'])->name('course4.show');
    
});

require __DIR__ . '/auth.php';
