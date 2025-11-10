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
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        // Tidak menggunakan progress, biarkan array kosong
        $completedCourses3 = [];

        return view('fe.coursepkl.course', [
            'bab' => $bab,
            'completedCourses3' => $completedCourses3,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevCoursePkl' => null,
            'nextCoursePkl' => null,
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

        $completedCourses3 = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursepkl.course', [
            'bab' => $bab,
            'completedCourse3' => $completedCourses3,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevCoursePkl' => $prevCoursePkl,
            'nextCoursePkl' => $nextCoursePkl,
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
