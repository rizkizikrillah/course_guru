<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LMS – courseself</title>

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
    @include('fe.courseself.navbar')

    {{-- WRAPPER --}}
    <div x-data="courseApp({{ $bab->count() }}, {{ json_encode($completedCourses2 ?? []) }})"
        class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-12 gap-6">

        {{-- SIDEBAR --}}
        @include('fe.courseself.sidebar')

        {{-- MAIN CONTENT --}}
        @include('fe.courseself.content')

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
                prevBab: @json($prevCourseSelf),
                nextBab: @json($nextCourseSelf),

                markComplete(babId) {
                    if (this.completedBab.includes(babId)) return;
                    fetch(`{{ url('courseself') }}/${babId}/complete`, {
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
                                window.location.href = `/courseself/${this.nextBab.slug}`;
                            }
                        });
                },

                goPrev() {
                    if (this.prevBab) {
                        window.location.href = `/courseself/${this.prevBab.slug}`;
                    }
                },

                goNext() {
                    if (this.nextBab) {
                        window.location.href = `/courseself/${this.nextBab.slug}`;
                    }
                }
            }
        }
    </script>

</body>

</html>
