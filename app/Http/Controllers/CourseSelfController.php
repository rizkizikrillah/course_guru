<?php

namespace App\Http\Controllers;

use App\Models\CourseSelf;
use Illuminate\Http\Request;

class CourseSelfController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CourseSelf
     */
    public function index()
{
    $bab = CourseSelf::whereNull('parent_id')
        ->with('children.children')
        ->orderBy('order')
        ->get();

    // Tidak menggunakan progress, biarkan array kosong
    $completedCoursesSelf = [];

    return view('fe.courseself.course', [
        'bab' => $bab,
        'completedCoursesSelf' => $completedCoursesSelf,
        'title' => null,
        'content' => null,
        'link' => null,
        'videoLink' => null,
        'prevcourseSelf' => null,
        'nextcourseSelf' => null,
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
        $materi = CourseSelf::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CourseSelf::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevCourseSelf = CourseSelf::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourseSelf = CourseSelf::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesSelf = []; // tetap kosong, tidak menggunakan progress

        return view('fe.courseself.course', [
            'bab' => $bab,
            'completedCoursesSelf' => $completedCoursesSelf,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcourseSelf' => $prevCourseSelf,
            'nextcourseSelf' => $nextCourseSelf,
    ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CourseSelf::findOrFail($id);

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
