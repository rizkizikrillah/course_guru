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
                {!! $content ?? '<p>Pointer diskusi SMK TI BAZMA x Sanbersy : </p>
                <a href="https://www.canva.com/design/DAGW_Hl4axY/r_VdhOstF1gPqjBC1WUg0Q/edit?utm_content=DAGW_Hl4axY&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank" class="text-blue-600 underline"> Klik di sini untuk membuka Pointer</a>
                <p>Materi self development berperan sebagai pondasi yang memungkinkan siswa mencapai visi dan tujuan pendidikan di SMK TI BAZMA, yaitu menjadi pribadi yang sebelumnya dibantu sehingga bisa berdaya, mandiri dan bermanfaat bagi sekitar.</p>
                <p>Berdasarkan World Economic Forum (2025), halangan terbesar yang akan terjadi ketika mengikuti perubahan zaman akibat, teknologi, ekonomi, demografi dan geoekonomi adalah kesenjangan skill. Sementara hardskills dalam bidang AI, big data, serta networks & cybersecurity akan mengalami pertumbuhan demand yang paling cepat, softskills seperti analytical thingking, cognitive skills, resilience, leadership dan collaboration akan tetap menjadi critical core skills. Kombinasi dari kedua skillsets tersebut akan diperlukan oleh berbagai pekerjaan kedepannya.</p>
                <p>Menangani perubahan besar dan kesenjangan sosial ini memerlukan tindakan cepat dan kolaboratif dari stakeholder terkait (pemerintah, dunia usaha dan lembaga pendidikan). Prioritas utama yaitu menjembatani kesenjangan keterampilan, pelatihan ulang (reskilling) dan peningkatan keterampilan (upskilling) dan menciptakan jalur akses yang terbuka untuk menuju pekerjaan dan keterampilan dengan permintaan yang bertumbuh. Kurikulum khas self-development yang dilaksanakan sebagai ko-kurikuler diharapkan mampu membantu menjawab tantangan tersebut melalui program pembelajaran yang fleksibel dan dinamis menyesuaikan kondisi rill.</p>' !!}
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