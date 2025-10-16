<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseSelf;
use Illuminate\Support\Facades\DB;

class CourseSelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseSelf::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseSelf::create([
            'title' => 'BAB I: Strategi penyampaian materi',
            'slug' => 'bab-1-strategi-penyampaian',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        $bab2 = CourseSelf::create([
            'title' => 'BAB II: Urgensi Self Development',
            'slug' => 'bab-2-Urgensi-Self',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        // // === Subbab: Pengantar CASEL ===
        // $subbab1 = CourseSelf::create([
        //     'title' => 'Mengenal Diri Sendiri - Siapa Dirimu sebagai Guru?',
        //     'slug' => 'mengenal-diri',
        //     'section' => 'bab-1',
        //     'content' => null,
        //     'parent_id' => $bab1->id,
        // ]);

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