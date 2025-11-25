<?php

namespace App\Http\Controllers;

use App\Models\coursebk;
use Illuminate\Http\Request;

class coursebkController extends Controller
{
    /**
     * Tampilkan daftar Bab & Subbab coursebk
     */
    public function index()
    {
        $bab = coursebk::whereNull('parent_id')
            ->with('children.children') // Bab → Subbab → Materi
            ->orderBy('order')
            ->get();

        // Tidak menggunakan progress, biarkan array kosong
        $completedCourseBk = [];

        return view('fe.coursebk.course', [
            'bab' => $bab,
            'completedCourseBk' => $completedCourseBk,
            'title' => null,
            'content' => null,
            'link' => null,
            'videoLink' => null,
            'prevcoursebk' => null,
            'nextcoursebk' => null,
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
        $materi = coursebk::with('parent.parent') // ambil subbab & bab
            ->where('slug', $slug)
            ->firstOrFail();

        $bab = coursebk::whereNull('parent_id')
            ->with('children.children')
            ->orderBy('order')
            ->get();

        // Tentukan subbab & bab aktif
        $activeSubbabId = $materi->parent_id;
        $activeBabId = $materi->parent ? $materi->parent->parent_id : null;

        // prev & next by order
        $prevcoursebk = coursebk::where('order', '<', $materi->order)
            ->orderBy('order', 'desc')
            ->first();

        $nextcoursebk = coursebk::where('order', '>', $materi->order)
            ->orderBy('order', 'asc')
            ->first();

        $completedCourseBk = []; // tetap kosong, tidak menggunakan progress

        return view('fe.coursebk.course', [
            'bab' => $bab,
            'completedCourseBk' => $completedCourseBk,
            'activeSlug' => $slug,
            'activeSection' => $materi->section,
            'activeBabId' => $activeBabId,
            'activeSubbabId' => $activeSubbabId,
            'course' => $materi,
            'title' => $materi->title,
            'content' => $materi->content,
            'link' => $materi->link ?? null,
            'videoLink' => $materi->videoLink ?? null,
            'prevcoursebk' => $prevcoursebk,
            'nextcoursebk' => $nextcoursebk,
        ]);
    }

    /**
     * Check quiz (tidak menyimpan progress)
     */
    public function checkQuiz(Request $request, $id)
    {
        $course = coursebk::findOrFail($id);

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
