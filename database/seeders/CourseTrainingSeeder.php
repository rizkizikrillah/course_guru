<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseTraining;
use Illuminate\Support\Facades\DB;

class CourseTrainingSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseTraining::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseTraining::create([
            'title' => 'BAB I: KPI & Meeting Effectiveness',
            'slug' => 'bab-1-kpi-meeting',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = CourseTraining::create([
            'title' => 'Rapat Kerja 7-8 Februari 2024',
            'slug' => 'rapat-kerja',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        CourseTraining::create([
            'title' => 'Rapat Kerja',
            'slug' => 'rapat-k',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Rapat Kerja 7-8 Februari 2025 Oleh Ibu Gustini Raswati.</p>
                <a href="https://drive.google.com/drive/folders/1sWgawIX9EULnTY9pmz64kMovQ8da_Go8?usp=sharing" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab1->id,
        ]);

        $bab2 = CourseTraining::create([
            'title' => 'BAB II: Workplan KPI SMK TI BAZMA',
            'slug' => 'bab-2-workplan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

         $subbab2 = CourseTraining::create([
            'title' => 'Rapat Kerja 9 Juli 2025',
            'slug' => 'rapatkerja-9',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CourseTraining::create([
            'title' => 'Rapat Kerja',
            'slug' => 'rapat-krja',
            'order' => 2,
            'section' => 'bab-2',
            'content' => '<p>Rapat Kerja 9 Juli 2025 Oleh Fatimah Azzahra</p>
                <a href="https://www.canva.com/design/DAGvQWOXGhM/W53pQaVteXnYNF8IBYyN4Q/edit?utm_content=DAGvQWOXGhM&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank" class="text-blue-600 underline">📄 Link Drive</a>',
            'parent_id' => $subbab2->id,
        ]);
    }
};
