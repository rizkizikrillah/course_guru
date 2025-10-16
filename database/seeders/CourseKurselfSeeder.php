<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseKurself;
use Illuminate\Support\Facades\DB;

class CourseKurSelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseKurself::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseKurself::create([
            'title' => 'BAB I: Mandiri ',
            'slug' => 'bab-1-mandiri',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab1 = CourseKurself::create([
            'title' => 'Proactive',
            'slug' => 'mandiri-proactive',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        $subbab1 = CourseKurself::create([
            'title' => 'Know Yourself',
            'slug' => 'mengenal-yourself',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        $subbab1 = CourseKurself::create([
            'title' => 'Menentukan Tujuan',
            'slug' => 'menentukan-tujuan',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        $bab2 = CourseKurself::create([
            'title' => 'BAB II: Gigih',
            'slug' => 'bab-2-gigih',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Self Discipline',
            'slug' => 'mengenal-self-discipline',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Active Learning & Learning Strategies',
            'slug' => 'active-learning-strategies',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Agile Mindset',
            'slug' => 'mengenal-agile-mindset',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Manajemen Risiko & Ekspektasi',
            'slug' => 'mengenal-manajemen-risiko',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Stress Tolerance',
            'slug' => 'mengenal-stress-tolerance',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Titik Jenuh',
            'slug' => 'mengenal-titik-jenuh',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $bab3 = CourseKurself::create([
            'title' => 'BAB III: Mudah Bergaul',
            'slug' => 'bab-3-mudah-bergaul',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'The Art of Collaboration',
            'slug' => 'art-of-collaboration',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'Komunikasi Efektif',
            'slug' => 'mengenal-komunikasi-efektif',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'Interpersonal Skill',
            'slug' => 'mengenal-interpersonal-skill',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        $bab4 = CourseKurself::create([
            'title' => 'BAB IV: Profesional',
            'slug' => 'bab-4-profesional',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Management Skill',
            'slug' => 'mengenal-management-skill',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Problem Solving',
            'slug' => 'mengenal-problem-solving',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Critical Thinking',
            'slug' => 'mengenal-critical-thinking',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Continious Improvement',
            'slug' => 'mengenal-continious-improvement',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Presentation Skill',
            'slug' => 'mengenal-presentation-skill',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Creating CV & Portfolio',
            'slug' => 'creating-cv-portfolio',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        // === Subbab: Pengantar CASEL ===
        

        // // === Materi di dalam Subbab ===
        // CourseSelf::create([
        //     'title' => 'Naskah Akademik dan Paparan Pembelajaran Mendalam',
        //     'slug' => 'naskah-akademik-dan-paparan-pembelajaran',
        //     'order' => 1,
        //     'section' => 'bab-1',
        //     'content' => '<p>Dokumen ini berisi naskah akademik dan paparan pembelajaran mendalam menuju pendidikan bermutu untuk semua. Dokumen-dokumen ini wajib dibaca agar peserta PPG mendapatkan pemahaman kerangka kerja pembelajaran mendalam sebagai landasan menyelesaikan jurnal pembelajaran.</p>
        //         <a href="https://storage.googleapis.com/microlearning-public-production/document/5f9a7be1-74e6-4c10-a93a-314a6cb507fa-ACC%20Menteri_Nasmik_Pembelajaran%20Mendalam%20(2)_compressed.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Akademik</a>
        //         <a href="https://storage.googleapis.com/microlearning-public-production/document/f0931beb-ffa3-495d-939a-89abad76b75a-Paparan%20Pembelajaran%20Mendalam%20V2%20(1)%20(1).pdf" target="_blank" class="text-blue-600 underline">📄 Buku Paparan Mendalam</a>',
        //     'parent_id' => $subbab1->id,
        // ]);
    }
};