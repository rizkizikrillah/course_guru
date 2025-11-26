<?php

namespace App\Http\Controllers;

use App\Models\CourseGemini2;
use Illuminate\Http\Request;

class CourseGemini2Controller extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CourseGemini2
     */
    public function index()
    {
        $bab = CourseGemini2::whereNull('parent_id')
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        // Tidak menggunakan progress, biarkan array kosong
        $completedCoursesGemini2 = [];

        return view('fe.coursegemini2.course', [
            'bab' => $bab,
            'completedCoursesGemini2' => $completedCoursesGemini2,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevcoursegemini2' => null,
            'nextcoursegemini2' => null,
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
        $materi = CourseGemini2::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CourseGemini2::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevcoursegemini2 = CourseGemini2::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextcoursegemini2 = CourseGemini2::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesGemini2 = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursegemini2.course', [
            'bab' => $bab,
            'completedCoursesGemini2' => $completedCoursesGemini2,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcoursegemini2' => $prevcoursegemini2,
            'nextcoursegemini2' => $nextcoursegemini2,
        ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CourseGemini2::findOrFail($id);

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
