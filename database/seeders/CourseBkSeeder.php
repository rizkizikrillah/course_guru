<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseBk;
use Illuminate\Support\Facades\DB;

class CourseBkSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseBk::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseBk::create([
            'title' => 'BAB I: Counseling Guidance Training',
            'slug' => 'bab-1-pelatihan-bk',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

         $subbab1 = CourseBk::create([
            'title' => 'Counseling Guidance Training SMK TI BAZMA',
            'slug' => 'pelatihan-smktibazma-bk',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseBk::create([
            'title' => 'Counseling Guidance Training BK SMK TI BAZMA 25 Sept 2025',
            'slug' => 'bk-pelatihan',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Pelatihan BK SMK TI BAZMA</p>
                <a href="https://drive.google.com/drive/folders/1zxqvRlPbc0jqovHWdRWt6dOe2jMxs8q7?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab1->id,
        ]);
    }
}