<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course4;
use Illuminate\Support\Facades\DB;

class Course4Seeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Course4::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Topik: Pengantar CASEL ===
            $topik1 = Course4::create([
                'title' => 'Buku AI untuk SMA/SMK',
                'slug' => 'materi-ai-kelas10',
                'section' => 'kelas-10',
                'content' => null,
            ]);

            $bab1 = Course4::create([
                'title' => 'Kelas 10 ',
                'slug' => 'bab-1-ai',
                'order' => 1,
                'section' => 'kelas-10',
                'content' => null,
                'parent_id' => $topik1->id,
            ]);

            Course4::create([
                'title' => 'Buku Pembelajaran Mengenai AI untuk Kelas 10',
                'slug' => 'buku-ai',
                'order' => 2,
                'section' => 'kelas-10-1',
                'content' => '<p>Ini adalah link untuk akses buku AI kelas 10, digunakan untuk bahan pembelajaran</p>
                <p><a href="https://drive.google.com/drive/folders/1NYLylZlYtnx4QJuHCNZ62XGu8jze44FM?usp=sharing" target="_blank" class="text-blue-600 underline">link buku silahkan di akses</a></p>',
                'parent_id' => $bab1->id,
            ]);

            $bab2 = Course4::create([
                'title' => 'Kelas 11 ',
                'slug' => 'bab-2-ai',
                'order' => 3,
                'section' => 'kelas-11',
                'content' => null,
                'parent_id' => $topik1->id,
            ]);

            Course4::create([
                'title' => 'Buku Pembelajaran Mengenai AI untuk Kelas 11',
                'slug' => 'buku-ai-11',
                'order' => 4,
                'section' => 'kelas-11-2',
                'content' => '<p>Ini adalah link untuk akses buku AI kelas 11, digunakan untuk bahan pembelajaran</p>
                <p><a href="https://drive.google.com/drive/folders/1VGBgNIUNPs1UJu-mkyR0GzS9-4J5vVI9?usp=sharing" target="_blank" class="text-blue-600 underline">link buku silahkan di akses</a></p>',
                'parent_id' => $bab2->id,
            ]);

            $bab3 = Course4::create([
                'title' => 'Kelas 12 ',
                'slug' => 'bab-3-ai',
                'order' => 5,
                'section' => 'kelas-12',
                'content' => null,
                'parent_id' => $topik1->id,
            ]);

            Course4::create([
                'title' => 'Buku Pembelajaran Mengenai AI untuk Kelas 12',
                'slug' => 'buku-ai-12',
                'order' => 6,
                'section' => 'kelas-11-2',
                'content' => '<p>Ini adalah link untuk akses buku AI kelas 12, digunakan untuk bahan pembelajaran</p>
                <p><a href="https://drive.google.com/drive/folders/1HMAfZmhJS6yjQ1YzUY9Kc4Zse6cc7MWJ?usp=sharing" target="_blank" class="text-blue-600 underline">link buku silahkan di akses</a></p>',
                'parent_id' => $bab3->id,
            ]);
    }
}
