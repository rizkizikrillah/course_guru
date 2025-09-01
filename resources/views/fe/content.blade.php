<main class="col-span-12 md:col-span-8 lg:col-span-9">
    <div class="bg-white rounded-xl shadow-sm border">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold">
                {{ $title ?? 'Introduction' }}
            </h1>
        </div>

        <div class="p-6 space-y-6 leading-relaxed">
            {{-- Penjelasan dokumen --}}
            @if(!empty($documentDescription))
                <div class="mb-4 p-4 bg-blue-50 rounded">
                    {!! $documentDescription !!}
                </div>
            @endif

            {{-- Konten utama course --}}
            {!! $content ?? '<p class="text-gray-500">Silakan pilih sub bab dari halaman disamping untuk melihat konten.</p>' !!}
        </div>


        {{-- Link ke dokumen --}}
        @if(!empty($link))
            <div class="p-6">
                <a href="{{ $link }}" target="_blank"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    📄 Buka Dokumen
                </a>
            </div>
        @endif

        {{-- Tombol Navigasi --}}
        <div class="p-6 flex justify-between border-t">
            {{-- Tombol Prev --}}
            @isset($prevCourse)
                <a href="{{ route('course.show', [$prevCourse->section, $prevCourse->slug]) }}"
                    class="px-4 py-2 rounded-lg hover:bg-gray-300
                        {{ in_array($prevCourse->id, $completedCourses) ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' }}">
                    ← {{ $prevCourse->title }}
                </a>
            @else
                <span></span>
            @endisset

            {{-- Tombol Next --}}
            @isset($nextCourse)
                <a href="{{ route('course.show', [$nextCourse->section, $nextCourse->slug]) }}"
                    class="px-4 py-2 rounded-lg hover:bg-blue-700
                        {{ in_array($nextCourse->id, $completedCourses) ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-600' }}">
                    {{ $nextCourse->title }} →
                </a>
            @endisset
        </div>
    </div>
</main>