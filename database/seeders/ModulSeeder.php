<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modul;

class ModulSeeder extends Seeder
{
    public function run(): void
    {
        $moduls = [
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
                'description' => 'Modul ini membekali mahasiswa calon guru/guru dengan kemampuan untuk memahami filosofi pendidikan Indonesia, menginternalisasi nilai-nilai ke-Indonesia-an dalam menjalankan tugas sebagai pendidik dan dalam kehidupan keseharian, mengembangkan strategi internalisasi nilai dalam pembelajaran yang berpusat pada peserta didik serta berkomitmen pada nilai-nilai moral dan etika, dasar-dasar kepemimpinan, dan sebagai pembelajar sepanjang hayat.',
                'unit' => 3,
                'icon' => 'https://mil-kv.guru.belajar.id/image/collection/topic/46a6badd-4b70-4322-8468-950879a96218-tut wuri handayani.png',
            ],
            [
                'title' => 'Pembelajaran Buku AI untuk Siswa',
                'description' => 'Modul pembelajaran buku AI untuk Siswa',
                'unit' => 1,
                'icon' => 'https://img.icons8.com/fluency/96/artificial-intelligence.png',
            ],
        ];

        foreach ($moduls as $modul) {
            Modul::updateOrCreate(
                ['title' => $modul['title']], // kunci unik
                $modul // data yang akan diupdate atau dibuat
            );
        }
    }
}
