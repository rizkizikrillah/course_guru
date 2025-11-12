<?php

namespace App\Http\Controllers;

use App\Models\CourseKurself;
use Illuminate\Http\Request;

class CourseKurselfController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CourseKurself
     */
    public function index()
{
    $bab = CourseKurself::whereNull('parent_id')
        ->with('children.children')
        ->orderBy('order')
        ->get();

    // Tidak menggunakan progress, biarkan array kosong
    $completedCoursesKurself = [];

    return view('fe.coursekurself.course', [
        'bab' => $bab,
        'completedCoursesKurself' => $completedCoursesKurself,
        'title' => null,
        'content' => null,
        'link' => null,
        'videoLink' => null,
        'prevcourseKurself' => null,
        'nextcourseKurself' => null,
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
        $materi = CourseKurself::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CourseKurself::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevCourseKurself = CourseKurself::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourseKurself = CourseKurself::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesKurself = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursekurself.course', [
            'bab' => $bab,
            'completedCoursesKurself' => $completedCoursesKurself,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcourseKurself' => $prevCourseKurself,
            'nextcourseKurself' => $nextCourseKurself,
    ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CourseKurself::findOrFail($id);

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
