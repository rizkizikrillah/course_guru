<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LMS – Course Training</title>

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
    @include('fe.coursetraining.navbar')

    {{-- WRAPPER --}}
    <div x-data="courseApp({{ $bab->count() }}, {{ json_encode($completedCourses ?? []) }})"
        class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-12 gap-6">

        {{-- SIDEBAR --}}
        @include('fe.coursetraining.sidebar')

        {{-- MAIN CONTENT --}}
        @include('fe.coursetraining.content')

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
                progress: 0,
                prevBab: @json($prevCourseTraining),
                nextBab: @json($nextCourseTraining),

                markComplete(babId) {
                    if (this.completedBab.includes(babId)) return;

                    fetch(`{{ url('coursetraining') }}/${babId}/complete`, {
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

                            // Auto Next
                            if (this.nextBab) {
                                window.location.href = `/coursetraining/${this.nextBab.slug}`;
                            }
                        });
                },

                goPrev() {
                    if (this.prevBab) {
                        window.location.href = `/coursetraining/${this.prevBab.slug}`;
                    }
                },

                goNext() {
                    if (this.nextBab) {
                        window.location.href = `/coursetraining/${this.nextBab.slug}`;
                    }
                }
            }
        }
    </script>

</body>

</html>
