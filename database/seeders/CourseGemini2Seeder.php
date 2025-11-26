<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\CourseGemini2;
use Illuminate\Support\Facades\DB;

class CourseGemini2Seeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseGemini2::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseGemini2::create([
            'title' => 'BAB I:Merancang Pembelajaran Inovatif dan Efektif dengan AI Gemini',
            'slug' => 'bab-1-merancang-pembelajaran-dengan-ai-gemini',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = CourseGemini2::create([
            'title' => 'Pembelajaran Inovatif dan Efektif dengan AI Gemini Oleh Pak Dzikri',
            'slug' => 'inovatif-efektif',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        CourseGemini2::create([
            'title' => 'Materi Inovatif dan Efektif dengan AI Gemini',
            'slug' => 'materi-inovatif-efektif-ai-gemini',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Pembelajaran inovatif dan efektif dengan AI Gemini adalah pendekatan belajar yang memanfaatkan kemampuan kecerdasan buatan—khususnya model Gemini—untuk membantu guru dan siswa memahami materi dengan lebih cepat, personal, dan interaktif.</p>
            <p>Dalam proses ini, Gemini berperan sebagai asisten cerdas yang mampu memberikan penjelasan, contoh, evaluasi, umpan balik, dan rekomendasi pembelajaran yang sesuai dengan kebutuhan individu. Dengan dukungan otomatisasi dan analisis data dari AI, pembelajaran menjadi:</p>
            <ol>
                <li>(1) Lebih kreatif (karena tersedianya ide, model, media, dan aktivitas pembelajaran yang variatif)</li>
                <li>(2)Lebih efisien (waktu belajar lebih optimal)</li>
                <li>(3)Lebih personal (materi disesuaikan dengan kemampuan tiap siswa)</li>
                <li>Lebih interaktif dan menarik (melalui simulasi, contoh, dan visual yang dihasilkan AI)</li>           
            </ol>
                <a href="https://drive.google.com/file/d/1YipDcqQoDuc9dEj1YdYrEtrjBI3YZNa5/view?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Buku AI Gemini</a>',
            'parent_id' => $subbab1->id,
        ]);
    }
};
