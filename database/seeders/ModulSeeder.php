<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modul;

class ModulSeeder extends Seeder
{
    public function run(): void
    {
        $moduls = [
            // ====== PPG ======
            [
                'title' => 'Pembelajaran Mendalam dan Asesmen (SMK)',
                'description' => 'Membahas model dan konteks pembelajaran di SMK serta mata pelajaran PKL.',
                'unit' => 5,
                'icon' => 'https://img.icons8.com/fluency/96/student-male.png',
            ],
            [
                'title' => 'Pembelajaran Sosial Emosional',
                'description' => 'Konsep dan Praktik Pembelajaran Sosial Emosional di Sekolah [2025]',
                'unit' => 4,
                'icon' => 'https://img.icons8.com/fluency/96/classroom.png',
            ],
            [
                'title' => 'Filosofi Pendidikan dan Pendidikan Nilai',
                'description' => 'Modul ini membekali mahasiswa calon guru/guru dengan kemampuan untuk memahami filosofi pendidikan Indonesia, menginternalisasi nilai-nilai ke-Indonesia-an...',
                'unit' => 3,
                'icon' => 'https://mil-kv.guru.belajar.id/image/collection/topic/46a6badd-4b70-4322-8468-950879a96218-tut wuri handayani.png',
            ],
            [
                'title' => 'Pembelajaran Buku AI untuk Siswa',
                'description' => 'Modul pembelajaran buku AI untuk Siswa',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/artificial-intelligence.png',
            ],
            [
                'title' => 'Gemini Academy',
                'description' => 'Melalui pelatihan ini, guru akan mampu menguasai teknologi AI, khususnya Gemini, dan mengaplikasikannya dalam pembelajaran
                Guru akan belajar strategi pembelajaran berbasis TIK yang adaptif, sehingga dapat meningkatkan keterlibatan dan prestasi siswa
                Secara keseluruhan, pelatihan ini bertujuan untuk meningkatkan kompetensi guru dalam memanfaatkan teknologi untuk menciptakan pembelajaran yang lebih inovatif dan efektif',
                'unit' => 3,
                'icon' => 'https://img.icons8.com/fluency/96/artificial-intelligence.png',
            ],

            // ====== PKL ======
            [
                'title' => 'PKL',
                'description' => 'Isi dari Modul ini adalah sebuah dokumentasi beberapa file terkait pembekalan PKL di SMK TI BAZMA',
                'unit' => 3,
                'icon' => 'https://img.icons8.com/fluency/96/internship.png',
            ],

            // ====== Training of Trainer - Self Development ======
            [
                'title' => 'Landasan Pemahaman',
                'description' => 'Memahami konsep dasar pengembangan diri melalui refleksi, kesadaran diri, dan perencanaan pengembangan potensi secara berkelanjutan.',
                'unit' => 2,
                'icon' => 'https://img.icons8.com/fluency/96/mind-map.png',
            ],
            [
                'title' => 'Kurikulum Self Dev',
                'description' => 'Menjelaskan hubungan antara kurikulum dan pengembangan diri sebagai dasar dalam membentuk kompetensi dan karakter pendidik.',
                'unit' => 4,
                'icon' => 'https://img.icons8.com/fluency/96/training.png',
            ],

            // ====== Additional Trainings ======
            [
                'title' => 'Key Performance Indicators',
                'description' => 'Materi ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pemahaman tentang konsep, urgensi, dan penerapan Key Performance Indicators (KPI). Peserta diharapkan mampu memaknai KPI sebagai alat ukur kinerja yang strategis, serta menyusun indikator yang relevan, terukur, dan selaras dengan visi misi dan nilai yang dipegang SMK TI BAZMA.',
                'unit' => 2,
                'icon' => 'https://img.icons8.com/fluency/96/combo-chart.png',
            ],

            [
                'title' => 'Conselling Guidenance Trainings',
                'description' => 'Modul ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pengetahuan dan keterampilan dasar dalam memberikan bimbingan konseling kepada siswa. Peserta akan mempelajari konsep dasar bimbingan konseling, teknik komunikasi efektif, serta strategi dalam mengidentifikasi dan menangani berbagai permasalahan yang dihadapi siswa di lingkungan sekolah. Dengan modul ini, diharapkan tenaga pendidik dan kependidikan dapat menjadi fasilitator yang mampu mendukung perkembangan akademik, sosial, dan emosional siswa secara optimal.',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/school.png',
            ],

            [
                'title' => 'Pengimbasan Gemini Pak Dzikri',
                'description' => 'Modul ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pengetahuan dan keterampilan dalam memanfaatkan teknologi AI, khususnya Gemini, untuk menciptakan pembelajaran yang inovatif dan efektif. Peserta akan mempelajari konsep dasar AI, fitur-fitur Gemini, serta strategi pembelajaran berbasis TIK yang adaptif. Dengan modul ini, diharapkan tenaga pendidik dan kependidikan dapat meningkatkan kompetensi mereka dalam mengintegrasikan teknologi ke dalam proses pembelajaran guna meningkatkan keterlibatan dan prestasi siswa.',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/artificial-intelligence.png',
            ],
        ];

        foreach ($moduls as $modul) {
            Modul::updateOrCreate(
                ['title' => $modul['title']],
                $modul
            );
        }
    }
}
