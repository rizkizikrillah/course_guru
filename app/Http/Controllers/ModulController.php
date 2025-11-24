<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class ModulController extends Controller
{
    public function index()
    {
        // Ambil semua modul dari database
        $moduls = Modul::all();

        // Bagi berdasarkan kategori (PPG)
        $modulsPpg = $moduls->filter(function ($modul) {
            return in_array($modul->title, [
                'Pembelajaran Mendalam dan Asesmen (SMK)',
                'Pembelajaran Sosial Emosional',
                'Filosofi Pendidikan dan Pendidikan Nilai',
                'Pembelajaran Buku AI untuk Siswa',
                'Gemini Academy',
            ]);
        });

        // Modul PKL
        $modulsPkl = $moduls->filter(function ($modul) {
            return in_array($modul->title, [
                'PKL',
            ]);
        });

        // Modul 3: Training of Trainer - Self Development
        $modulsTot = $moduls->filter(function ($modul) {
            return in_array($modul->title, [
                'Landasan Pemahaman',
                'Kurikulum Self Dev',
            ]);
        });

        // Modul 4: Additional Trainings
        $modulsAdditional = $moduls->filter(function ($modul) {
            return in_array($modul->title, [
                'Key Performance Indicators',
            ]);
        });

        // Kirim ke view
        return view('fe.modul', compact('modulsPpg', 'modulsPkl', 'modulsTot', 'modulsAdditional'));
    }
}
