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

        // Tidak menggunakan progress, biarkan array kosong
        $completedCoursesGemini = [];

        return view('fe.coursegemini.course', [
            'bab' => $bab,
            'completedCoursesGemini' => $completedCoursesGemini,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevcourseGemini' => null,
            'nextcourseGemini' => null,
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

        // prev & next by order
        $prevcourseGemini = CourseGemini::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextcourseGemini = CourseGemini::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesGemini = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursegemini.course', [
            'bab' => $bab,
            'completedCoursesGemini' => $completedCoursesGemini,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcourseGemini' => $prevcourseGemini,
            'nextcourseGemini' => $nextcourseGemini,
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
            // Tidak menyimpan progress
            return redirect()->back()->with('success', 'Jawaban benar ✅');
        }

        return redirect()->back()->with('error', 'Jawaban salah, coba lagi ❌');
    }
}
