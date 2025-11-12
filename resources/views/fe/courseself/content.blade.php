<main class="col-span-12 md:col-span-8 lg:col-span-9">
    <div class="bg-white rounded-xl shadow-sm border">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold">
                {{ $title ?? 'Instruction' }}
            </h1>
        </div>

        <div class="p-6 space-y-6 leading-relaxed">
            {{-- Jika materi ini adalah quiz --}}
            @if(isset($course) && $course->is_quiz)
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h2 class="text-lg font-semibold mb-4">{{ $course->quiz_question }}</h2>

                    <form method="POST" action="{{ route('courseSelf.quiz.check', $course->id) }}">
                        @csrf
                        @if(!empty($course->quiz_options) && is_array($course->quiz_options))
                            @foreach($course->quiz_options as $option)
                                <div class="mb-2">
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="answer" value="{{ $option }}" required class="text-blue-600">
                                        <span>{{ $option }}</span>
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <p class="text-red-600">⚠️ Opsi jawaban belum tersedia.</p>
                        @endif

                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Submit Jawaban
                        </button>
                    </form>
                </div>

                {{-- Popup feedback --}}
                @if(session('quizResult'))
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            let result = "{{ session('quizResult') }}";
                            if (result === "correct") {
                                alert("🎉 Jawaban Anda benar!");
                                window.location.href =
                                    "{{ $nextcourseSelf ? route('courseSelf.show', $nextcourseSelf->slug) : route('courseSelf.index') }}";
                            } else {
                                alert("❌ Jawaban salah, coba lagi!");
                                window.location.reload();
                            }
                        });
                    </script>
                @endif
            @else
                {{-- Penjelasan dokumen --}}
                @if(!empty($documentDescription))
                    <div class="mb-4 p-4 bg-blue-50 rounded">
                        {!! $documentDescription !!}
                    </div>
                @endif

                {{-- Konten utama materi --}}
                {!! $content ?? '<p>
                            Setelah Anda membaca materi, menonton video, mengerjakan aktivitas, dan memahami seluruh isi pembelajaran dalam bab ini, silakan lanjutkan dengan Latihan Pemahaman sebagai bentuk penyelesaian dan penguatan kompetensi pada bab ini.</p>
                            <p>Latihan ini bertujuan untuk:</p>
                            <ol class="list-decimal ml-5">
                                <li>Mengukur tingkat pemahaman Anda terhadap konsep yang telah dipelajari.</li>
                                <li>Melatih penerapan pengetahuan pada konteks nyata di kelas SMK.</li>
                                <li>Menjadi dasar refleksi dan persiapan menuju bab berikutnya.</li>
                            </ol> 
                            <p class="mt-2">
                            👉 Kerjakan Latihan Pemahaman dengan sungguh-sungguh sebagai penutup bab ini.</p>' !!}
            @endif
        </div>

        {{-- Link ke dokumen (hanya untuk materi biasa, bukan quiz) --}}
        @if(!empty($link) && isset($course) && !$course->is_quiz)
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
            @isset($prevcourseSelf)
                    <a href="{{ route('courseself.show', $prevcourseSelf->slug) }}" class="px-4 py-2 rounded-lg transition
                                {{ in_array($prevcourseSelf->id, $completedCoursesSelf)
                ? 'bg-blue-600 text-white hover:bg-blue-700'
                : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        ← {{ $prevcourseSelf->title }}
                    </a>
            @else
                <span></span>
            @endisset

            {{-- Tombol Next --}}
            @isset($nextcourseSelf)
                    <a href="{{ route('courseself.show', $nextcourseSelf->slug) }}" class="px-4 py-2 rounded-lg transition
                                {{ in_array($nextcourseSelf->id, $completedCoursesSelf)
                ? 'bg-blue-600 text-white hover:bg-blue-700'
                : 'bg-gray-300 text-gray-600 hover:bg-gray-400' }}">
                        {{ $nextcourseSelf->title }} →
                    </a>
            @endisset
        </div>
    </div>
</main>