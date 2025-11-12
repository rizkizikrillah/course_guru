<?php

namespace App\Http\Controllers;

use App\Models\CoursePkl;
use Illuminate\Http\Request;

class CoursePklController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab CoursePkl
     */
    public function index()
{
    $bab = CoursePkl::whereNull('parent_id')
        ->with('children.children')
        ->orderBy('order')
        ->get();

    // Tidak menggunakan progress, biarkan array kosong
    $completedCoursesPkl = [];

    return view('fe.coursepkl.course', [
        'bab' => $bab,
        'completedCoursesPkl' => $completedCoursesPkl,
        'title' => null,
        'content' => null,
        'link' => null,
        'videoLink' => null,
        'prevcoursePkl' => null,
        'nextcoursePkl' => null,
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
        $materi = CoursePkl::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = CoursePkl::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevCoursePkl = CoursePkl::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCoursePkl = CoursePkl::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCoursesPkl = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursepkl.course', [
            'bab' => $bab,
            'completedCoursesPkl' => $completedCoursesPkl,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcoursePkl' => $prevCoursePkl,
            'nextcoursePkl' => $nextCoursePkl,
    ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = CoursePkl::findOrFail($id);

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
