@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    {{-- BAGIAN 1: PPG --}}
    <h1 class="text-xl font-bold mb-2 flex items-center">
        <span class="w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center mr-2">1</span>
        PPG (Pendidikan Profesi Guru)
    </h1>

    <div class="space-y-4 mb-10">
        @foreach ($modulsPpg as $modul)
        <div class="bg-white border rounded-lg shadow p-5 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-semibold">{{ $modul->title }}</h2>
                <p class="text-gray-600 text-sm mb-3">{{ $modul->description }}</p>
                <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                    <span>📄 {{ $modul->unit }} Unit Pembelajaran</span>
                </div>

                @if($modul->title == 'Pembelajaran Sosial Emosional')
                    <a href="{{ route('course2.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Masuk</a>
                @elseif($modul->title == 'Pembelajaran Buku AI untuk Siswa')
                    <a href="{{ route('course4.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Masuk</a>
                @elseif($modul->title == 'Filosofi Pendidikan dan Pendidikan Nilai') 
                    <a href="{{ route('course3.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Masuk</a>
                @elseif($modul->title == 'Gemini Academy')
                    <a href="{{ route('coursegemini.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Masuk</a>
                @else
                    <a href="{{ route('course.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Masuk</a>
                @endif
            </div>

            @if($modul->icon)
                <img src="{{ $modul->icon }}" alt="icon" class="w-16 h-16">
            @endif
        </div>
        @endforeach
    </div>

    {{-- BAGIAN 2: PKL --}}
    <h1 class="text-xl font-bold mb-2 flex items-center">
        <span class="w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center mr-2">2</span>
        PKL (Praktik Kerja Lapangan)
    </h1>

    <div class="space-y-4 mb-10">
        @foreach ($modulsPkl as $modul)
        <div class="bg-white border border-green-300 rounded-lg shadow p-5 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-semibold text-green-700">{{ $modul->title }}</h2>
                <p class="text-gray-600 text-sm mb-3">{{ $modul->description }}</p>
                <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                    <span>📄 {{ $modul->unit }} Unit Pembelajaran</span>
                </div>
                @if($modul->title == 'PKL')
                    <a href="{{ route('coursepkl.index') }}" class="inline-block px-4 py-2 bg-green-300 hover:bg-green-600 text-white text-sm rounded">Masuk</a>
                @endif
            </div>

            @if($modul->icon)
                <img src="{{ $modul->icon }}" alt="icon" class="w-16 h-16">
            @endif
        </div>
        @endforeach
    </div>

    {{-- BAGIAN 3: TRAINING OF TRAINER - SELF DEVELOPMENT --}}
    <h1 class="text-xl font-bold mb-2 flex items-center">
        <span class="w-6 h-6 bg-yellow-500 text-white rounded-full flex items-center justify-center mr-2">3</span>
        Training of Trainer - Self Development
    </h1>

    <div class="space-y-4 mb-10">
        @foreach ($modulsTot as $modul)
        <div class="bg-white border border-yellow-300 rounded-lg shadow p-5 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-semibold text-yellow-300">{{ $modul->title }}</h2>
                <p class="text-gray-600 text-sm mb-3">{{ $modul->description }}</p>
                <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                    <span>📄 {{ $modul->unit }} Unit Pembelajaran</span>
                </div>
                @if($modul->title == 'Landasan Pemahaman')
                    <a href="{{ route('courseself.index') }}" class="inline-block px-4 py-2 bg-yellow-300 hover:bg-yellow-600 text-white text-sm rounded">Masuk</a>
                @else($modul->title == 'Kurikulum Self Dev')
                    <a href="{{ route('coursekurself.index') }}" class="inline-block px-4 py-2 bg-yellow-300 hover:bg-yellow-600 text-white text-sm rounded">Masuk</a>
                @endif
            </div>

            @if($modul->icon)
                <img src="{{ $modul->icon }}" alt="icon" class="w-16 h-16">
            @endif
        </div>
        @endforeach
    </div>

    {{-- BAGIAN 4: ADDITIONAL TRAININGS --}}
    <h1 class="text-xl font-bold mb-2 flex items-center">
        <span class="w-6 h-6 bg-gray-500 text-white rounded-full flex items-center djustify-center mr-2">4</span>
        Additional Trainings
    </h1>

    <div class="space-y-4">
        @foreach ($modulsAdditional as $modul)
        <div class="bg-white border border-gray-300 rounded-lg shadow p-5 flex items-start justify-between">
            <div>
                <h2 class="text-lg font-semibold text-gray-600">{{ $modul->title }}</h2>
                <p class="text-gray-600 text-sm mb-3">{{ $modul->description }}</p>
                <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                    <span>📄 {{ $modul->unit }} Unit Pembelajaran</span>
                </div>
                @if($modul->title == 'Key Performance Indicators')
                    <a href="{{ route('coursetraining.index') }}" class="inline-block px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white text-sm rounded">Masuk</a>
                @endif
            </div>

            @if($modul->icon)
                <img src="{{ $modul->icon }}" alt="icon" class="w-16 h-16">
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
