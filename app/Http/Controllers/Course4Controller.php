<?php

namespace App\Http\Controllers;

use App\Models\Course4;
use Illuminate\Http\Request;

class Course4Controller extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab Course4
     */
    public function index()
{
    $bab = Course4::whereNull('parent_id')
        ->with('children.children')
        ->orderBy('order')
        ->get();

    // Tidak menggunakan progress, biarkan array kosong
    $completedCourses4 = [];

    return view('fe.course4.course', [
        'bab' => $bab,
        'completedCourses4' => $completedCourses4,
        'title' => null,
        'content' => null,
        'link' => null,
        'videoLink' => null,
        'prevcourse4' => null,
        'nextcourse4' => null,
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
        $materi = Course4::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = Course4::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevCourse4 = Course4::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourse4 = Course4::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCourses4 = []; // tetap kosong, tidak menggunakan progress

        return view('fe.course4.course', [
            'bab' => $bab,
            'completedCourses4' => $completedCourses4,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcourse4' => $prevCourse4,
            'nextcourse4' => $nextCourse4,
    ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = Course4::findOrFail($id);

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
