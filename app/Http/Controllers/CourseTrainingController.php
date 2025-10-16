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
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        // Tidak menggunakan progress
        $completedCourses = [];

        return view('fe.coursetraining.course', [
            'bab' => $bab,
            'completedCourses' => $completedCourses,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevCourseTraining' => null,
            'nextCourseTraining' => null,
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

        // ======================
        // 🔹 Logika Prev & Next
        // ======================
        // Next dalam parent yang sama
        $nextCourseTraining = CourseTraining::where('parent_id', $materi->parent_id)
            ->where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        // Jika tidak ada, coba cari di bab/subbab berikut
        if (!$nextCourseTraining && $materi->parent) {
            $nextCourseTraining = CourseTraining::where('parent_id', $materi->parent->parent_id)
                ->where('order', '>', $materi->parent->order)
                ->orderBy('order', 'asc')
                ->first();
        }

        // Previous dalam parent yang sama
        $prevCourseTraining = CourseTraining::where('parent_id', $materi->parent_id)
            ->where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        // Kalau masih tidak ada, mungkin di parent sebelumnya
        if (!$prevCourseTraining && $materi->parent) {
            $prevCourseTraining = CourseTraining::where('parent_id', $materi->parent->parent_id)
                ->where('order', '<', $materi->parent->order)
                ->orderBy('order', 'desc')
                ->first();
        }

        // Tidak menggunakan progress tracking
        $completedCourses = [];

        return view('fe.coursetraining.course', [
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
            'prevCourseTraining' => $prevCourseTraining,
            'nextCourseTraining' => $nextCourseTraining,
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
            return redirect()->back()->with('success', 'Jawaban benar ✅');
        }

        return redirect()->back()->with('error', 'Jawaban salah, coba lagi ❌');
    }
}
