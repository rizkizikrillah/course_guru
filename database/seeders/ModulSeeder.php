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

            // ====== PKL ======
            [
                'title' => 'PKL',
                'description' => 'Modul PKL',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/artificial-intelligence.png',
            ],
            [
                'title' => 'Laporan PKL',
                'description' => 'Panduan penyusunan laporan kegiatan PKL.',
                'unit' => 2,
                'icon' => 'https://img.icons8.com/fluency/96/report-card.png',
            ],
            [
                'title' => 'Evaluasi PKL',
                'description' => 'Modul untuk evaluasi hasil praktik kerja lapangan siswa.',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/approval.png',
            ],

            // ====== Training of Trainer - Self Development ======
            [
                'title' => 'Landasan Pemahaman',
                'description' => 'Memahami konsep dasar pengembangan diri melalui refleksi, kesadaran diri, dan perencanaan pengembangan potensi secara berkelanjutan.',
                'unit' => 2,
                'icon' => 'https://img.icons8.com/fluency-systems-regular/48/brainstorming.svg',
            ],
            [
                'title' => 'Kurikulum Self Dev',
                'description' => 'Menjelaskan hubungan antara kurikulum dan pengembangan diri sebagai dasar dalam membentuk kompetensi dan karakter pendidik.',
                'unit' => 4,
                'icon' => 'https://img.icons8.com/fluency-systems-regular/48/training.svg',
            ],

            // ====== Additional Trainings ======
            [
                'title' => 'Key Performance Indicators',
                'description' => 'Materi ini bertujuan untuk membekali tenaga pendidik dan kependidikan dengan pemahaman tentang konsep, urgensi, dan penerapan Key Performance Indicators (KPI). Peserta diharapkan mampu memaknai KPI sebagai alat ukur kinerja yang strategis, serta menyusun indikator yang relevan, terukur, dan selaras dengan visi misi dan nilai yang dipegang SMK TI BAZMA.',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/computer.png',
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
