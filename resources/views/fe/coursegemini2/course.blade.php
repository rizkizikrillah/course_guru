<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LMS – courseGemini2</title>

    {{-- Tailwind + Alpine --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .brand-gradient {
            background: linear-gradient(135deg, #2563eb, #06b6d4);
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- NAVBAR --}}
    @include('fe.coursegemini2.navbar')

    {{-- WRAPPER --}}
    <div x-data="courseApp({{ $bab->count() }}, {{ json_encode($completedcourseGemini2 ?? []) }})"
        class="max-w-7xl mx-auto px-gemini py-6 grid grid-cols-12 gap-6">

        {{-- SIDEBAR --}}
        @include('fe.coursegemini2.sidebar')

        {{-- MAIN CONTENT --}}
        @include('fe.coursegemini2.content')

    </div>

    {{-- AlpineJS Script --}}
    <script>
        function courseApp(totalBab, completedBab) {
            return {
                completedBab: completedBab,
                openSection: '{{ $activeSection ?? '' }}',
                activeSlug: '{{ $activeSlug ?? '' }}',
                activeId: {{ $course->id ?? 'null' }},
                activeTitle: '{{ $title ?? '' }}',
                activeContent: `{!! addslashes($content ?? '') !!}`,
                activeLink: '{{ $link ?? '' }}',
                activeVideo: '{{ $videoLink ?? '' }}',
                progress: {{ $progressPercent ?? 0 }},
                prevBab: @json($prevcoursegemini2),
                nextBab: @json($nextcoursegemini2),

                markComplete(babId) {
                    if (this.completedBab.includes(babId)) return;
                    fetch(`{{ url('coursegemini2') }}/${babId}/complete`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            this.completedBab.push(babId);
                            this.progress = Math.round((this.completedBab.length / totalBab) * 100);

                            // Auto next
                            if (this.nextBab) {
                                window.location.href = `/coursegemini2/${this.nextBab.slug}`;
                            }
                        });
                },

                goPrev() {
                    if (this.prevBab) {
                        window.location.href = `/coursegemini2/${this.prevBab.slug}`;
                    }
                },

                goNext() {
                    if (this.nextBab) {
                        window.location.href = `/coursegemini2/${this.nextBab.slug}`;
                    }
                }
            }
        }
    </script>

</body>

</html>
