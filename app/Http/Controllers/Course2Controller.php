<?php

namespace App\Http\Controllers;

use App\Models\Course2;
use App\Models\Course2Progress;
use Illuminate\Http\Request;

class Course2Controller extends Controller
{
    public function index()
    {
        $bab = Course2::whereNull('parent_id')
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        $completedCourses2 = auth()->check()
            ? Course2Progress::where('user_id', auth()->id())
                ->where('completed', true)
                ->pluck('course2_id')
                ->toArray()
            : [];

        return view('fe.course2.course', [
            'bab' => $bab,
            'completedCourses2' => $completedCourses2,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevCourse2' => null,
            'nextCourse2' => null,
            'activeSlug' => null,
            'activeSection' => null,
            'activeBabId' => null,
            'activeSubbabId' => null,
        ]);
    }

    public function show($slug)
    {
        $materi = Course2::with('parent.parent') // ambil subbab dan bab nya juga
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = Course2::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        $completedCourses2 = Course2Progress::where('user_id', auth()->id())
            ->where('completed', 1)
            ->pluck('course2_id')
            ->toArray();

        $progressPercent = count($completedCourses2) > 0
            ? round((count($completedCourses2) / Course2::count()) * 100)
            : 0;

        // prev & next by order
        $prevCourse2 = Course2::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourse2 = Course2::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        return view('fe.course2.course', [
            'bab' => $bab,
            'completedCourses2' => $completedCourses2,
            'progressPercent' => $progressPercent,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevCourse2' => $prevCourse2,
            'nextCourse2' => $nextCourse2,
        ]);
    }

    public function checkQuiz(Request $request, $id)
    {
        $course = Course2::findOrFail($id);

        if (!$course->is_quiz) {
            return redirect()->back()->with('error', 'Materi ini bukan quiz.');
        }

        $answer = $request->input('answer');

        if ($answer === $course->quiz_answer) {
            Course2Progress::updateOrCreate(
                ['user_id' => auth()->id(), 'course2_id' => $course->id],
                ['completed' => true]
            );

            return redirect()->back()->with('success', 'Jawaban benar ✅');
        }

        return redirect()->back()->with('error', 'Jawaban salah, coba lagi ❌');
    }
}
