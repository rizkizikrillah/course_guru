<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoursePkl;
use Illuminate\Support\Facades\DB;

class CoursePklSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CoursePkl::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CoursePkl::create([
            'title' => 'BAB I: Pengenalan Pertamina Group',
            'slug' => 'bab-1-pertamina',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = CoursePkl::create([
            'title' => 'Pembekalan PKL Pertamina Group',
            'slug' => 'pkl-pertamina',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        CoursePkl::create([
            'title' => 'Modul Pembekalan PKL Pertamina Group',
            'slug' => 'pkl-pertamina-modul',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Pembekalan PKL 27 Juni 2025 Oleh Ibu Gustini Raswati.</p>
                <a href="https://drive.google.com/file/d/1p_U8GlRlnITzbHyrM0-qmI8Dz9so2-lY/view?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab1->id,
        ]);

        $bab2 = CoursePkl::create([
            'title' => 'BAB II: First Step To The Real World',
            'slug' => 'bab-2-first-step',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab2 = CoursePkl::create([
            'title' => 'Pembekalan PKL first step To The Real World',
            'slug' => 'pkl-first-step',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CoursePkl::create([
            'title' => 'Modul Pembekalan PKL First Step To The Real World',
            'slug' => 'pkl-first-step-modul',
            'order' => 2,
            'section' => 'bab-2',
            'content' => '<p>Pembekalan PKL 27 Juni 2025 Oleh Gustini Raswati</p>
                <a href="https://drive.google.com/file/d/12iWlLsfanZNtRFS77EDOYmIt-yFaZ8VC/view?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab2->id,
        ]);


        $bab3 = CoursePkl::create([
            'title' => 'BAB III: Siap PKL',
            'slug' => 'bab-3-pkl',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab3 = CoursePkl::create([
            'title' => 'Pembekalan PKL Siap PKL',
            'slug' => 'pkl-siap',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CoursePkl::create([
            'title' => 'Modul Pembekalan PKL Siap PKL',
            'slug' => 'pkl-siap-modul',
            'order' => 3,
            'section' => 'bab-3',
            'content' => '<p>Pembekalan SIAP PKL</p>
                <a href="https://drive.google.com/file/d/19SugXxYamvlVEqJND_4rg8Tfys1FxOLA/view?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab3->id,
        ]);

    }
};
