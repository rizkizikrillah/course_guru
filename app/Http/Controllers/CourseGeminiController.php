<?php

namespace App\Http\Controllers;

use App\Models\CourseGemini;
use Illuminate\Http\Request;

class CourseGeminiController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CourseGemini
     */
    public function index()
    {
        $bab = CourseGemini::whereNull('parent_id')
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        // Tidak menggunakan progress
        $completedCourses = [];

        return view('fe.coursegemini.course', [
            'bab' => $bab,
            'completedCourses' => $completedCourses,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevCourseGemini' => null,
            'nextCourseGemini' => null,
            'activeSlug' => null,
            'activeSection' => null,
            'activeBabId' => null,
            'activeSubbabId' => null,
        ]);
    }

    /**
     * Tampilkan materi berdasarkan slug
     */
    public function show($slug)
    {
        $materi = CourseGemini::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CourseGemini::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // ======================
        // 🔹 Logika Prev & Next
        // ======================
        $prevCourseGemini = CourseGemini::where('order', '<', $materi->order)
    ->orderBy('order', 'desc')
    ->first();

$nextCourseGemini = CourseGemini::where('order', '>', $materi->order)
    ->orderBy('order', 'asc')
    ->first();

        // Tidak menggunakan progress tracking
        $completedCourses = [];

        return view('fe.coursegemini.course', [
            'bab' => $bab,
            'completedCourses' => $completedCourses,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevCourseGemini' => $prevCourseGemini,
            'nextCourseGemini' => $nextCourseGemini,
        ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CourseGemini::findOrFail($id);

        if (!$course->is_quiz) {
            return redirect()->back()->with('error', 'Materi ini bukan quiz.');
        }

        $answer = $request->input('answer');

        if ($answer === $course->quiz_answer) {
            return redirect()->back()->with('success', 'Jawaban benar ✅');
        }

        return redirect()->back()->with('error', 'Jawaban salah, coba lagi ❌');
    }
}
