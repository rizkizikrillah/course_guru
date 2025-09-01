<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('section')->orderBy('order')->get();
        $groupedCourses = $courses->groupBy('section');

        $completedCourses = auth()->check()
            ? CourseProgress::where('user_id', auth()->id())
                ->where('is_completed', true)
                ->pluck('course_id')
                ->toArray()
            : [];

        $progressPercent = $courses->count() > 0
            ? round(count($completedCourses) / $courses->count() * 100)
            : 0;

        return view('fe.course', [
            'courses' => $courses,
            'groupedCourses' => $groupedCourses,
            'progressPercent' => $progressPercent,
            'completedCourses' => $completedCourses,
            'title' => null, // Default null saat tidak ada kursus aktif
            'content' => null,
            'link' => null,
            'video' => null,
            'prevCourse' => null,
            'nextCourse' => null,
            'activeSlug' => null,
            'activeSection' => null,
        ]);
    }

    public function show($section, $slug)
    {
        $course = Course::where('section', $section)->where('slug', $slug)->firstOrFail();
        $courses = Course::orderBy('section')->orderBy('order')->get();
        $currentIndex = $courses->search(function ($c) use ($course) {
            return $c->id === $course->id;
        });
        $prevCourse = $currentIndex > 0 ? $courses[$currentIndex - 1] : null;
        $nextCourse = $currentIndex < $courses->count() - 1 ? $courses[$currentIndex + 1] : null;

        $completedCourses = auth()->check()
            ? CourseProgress::where('user_id', auth()->id())
                ->where('is_completed', true)
                ->pluck('course_id')
                ->toArray()
            : [];

        $progressPercent = $courses->count() > 0
            ? round(count($completedCourses) / $courses->count() * 100)
            : 0;

        return view('fe.course', [
            'course' => $course,
            'courses' => $courses,
            'groupedCourses' => $courses->groupBy('section'),
            'progressPercent' => $progressPercent,
            'completedCourses' => $completedCourses,
            'title' => $course->title ?? 'Kursus Tidak Ditemukan',
            'content' => $course->content ?? 'Konten belum tersedia.',
            'link' => $course->link ?? null,
            'video' => $course->video ?? null,
            'prevCourse' => $prevCourse,
            'nextCourse' => $nextCourse,
            'activeSlug' => $slug,
            'activeSection' => $section,
        ]);
    }

    public function complete($id)
    {
        try {
            $course = Course::findOrFail($id);
            if (!auth()->check()) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            CourseProgress::updateOrCreate(
                ['user_id' => auth()->id(), 'course_id' => $id],
                ['is_completed' => true]
            );

            $courses = Course::orderBy('section')->orderBy('order')->get();
            $completedCourses = CourseProgress::where('user_id', auth()->id())
                ->pluck('course_id')
                ->toArray();

            $progressPercent = $courses->count() > 0
                ? round(count($completedCourses) / $courses->count() * 100)
                : 0;

            $currentIndex = $courses->search(fn($c) => $c->id === $course->id);
            $nextCourse = $currentIndex < $courses->count() - 1 ? $courses[$currentIndex + 1] : null;

            \Log::info('Course marked complete', [
                'course_id' => $id,
                'user_id' => auth()->id(),
                'progress' => $progressPercent,
                'next_course' => $nextCourse ? $nextCourse->slug : null
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Course ditandai selesai',
                'progressPercent' => $progressPercent,
                'completedCourses' => $completedCourses, // Tambahkan untuk sinkronisasi dengan frontend
                'nextCourse' => $nextCourse ? [
                    'section' => $nextCourse->section,
                    'slug' => $nextCourse->slug,
                    'id' => $nextCourse->id
                ] : null
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Error marking course complete', [
                'course_id' => $id,
                'error' => $e->getMessage()
            ]);
            return response()->json(['error' => 'Failed to mark course complete'], 500);
        }
        
    }
}