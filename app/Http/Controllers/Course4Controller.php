<?php

namespace App\Http\Controllers;

use App\Models\Course4;
use App\Models\Course4Progress;
use Illuminate\Http\Request;

class Course4Controller extends Controller
{
    public function index()
    {
        $bab = Course4::whereNull('parent_id')
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        return view('fe.course4.course', [
            'bab' => $bab,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevCourse4' => null,
            'nextCourse4' => null,
            'activeSlug' => null,
            'activeSection' => null,
            'activeBabId' => null,
            'activeSubbabId' => null,
        ]);
    }

    public function show($slug)
    {
        $materi = Course4::with('parent.parent') // Ambil subbab dan bab-nya juga
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = Course4::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent?->parent_id ?? null;

        // Prev & next by order
        $prevCourse4 = Course4::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextCourse4 = Course4::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        return view('fe.Course4.course', [
            'bab' => $bab,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevCourse4' => $prevCourse4,
            'nextCourse4' => $nextCourse4,
        ]);
    }

    public function checkQuiz(Request $request, $id)
    {
        $course = Course4::findOrFail($id);

        if (!$course->is_quiz) {
            return redirect()->back()->with('error', 'Materi ini bukan quiz.');
        }

        $answer = $request->input('answer');

        // Cek jawaban benar atau salah
        if ($answer === $course->answer) {
            return redirect()->back()->with('success', 'Jawaban benar ✅');
        }

        return redirect()->back()->with('error', 'Jawaban salah, coba lagi ❌');
    }
}
