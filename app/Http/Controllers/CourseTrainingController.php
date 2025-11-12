<?php

namespace App\Http\Controllers;

use App\Models\CourseTraining;
use Illuminate\Http\Request;

class CourseTrainingController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CourseTraining
     */
    public function index()
{
    $bab = CourseTraining::whereNull('parent_id')
        ->with('children.children')
        ->orderBy('order')
        ->get();

    // Tidak menggunakan progress, biarkan array kosong
    $completedCoursesTraining = [];

    return view('fe.coursetraining.course', [
        'bab' => $bab,
        'completedCoursesTraining' => $completedCoursesTraining,
        'title' => null,
        'content' => null,
        'link' => null,
        'videoLink' => null,
        'prevcourseTraining' => null,
        'nextcourseTraining' => null,
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
        $materi = CourseTraining::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CourseTraining::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevCourseTraining = CourseTraining::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourseTraining = CourseTraining::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesTraining = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursetraining.course', [
            'bab' => $bab,
            'completedCoursesTraining' => $completedCoursesTraining,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcourseTraining' => $prevCourseTraining,
            'nextcourseTraining' => $nextCourseTraining,
    ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CourseTraining::findOrFail($id);

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
