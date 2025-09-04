@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-2 flex items-center">
            <span class="w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center mr-2">1</span>
            Pelajari Modul
        </h1>
        <p class="mb-6 text-gray-600">Selesaikan modul-modul di bawah dan unggah Jurnal Pembelajaran Anda.</p>

        <div class="space-y-4">
            @foreach ($moduls as $modul)
                <div class="bg-white border rounded-lg shadow p-5 flex items-start justify-between">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $modul->title }}</h2>
                        <p class="text-gray-600 text-sm mb-3">{{ $modul->description }}</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                            <span>📄 {{ $modul->unit }} Unit Pembelajaran</span>
                        </div>
                        {{-- Button Masuk --}}
                        @if($modul->title == 'Pembelajaran Sosial Emosional')
                            <a href="{{ url('/course2') }}"
                                class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">
                                Masuk
                            </a>
                        @else
                            <a href="{{ route('course.index') }}"
                                class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">
                                Masuk
                            </a>
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