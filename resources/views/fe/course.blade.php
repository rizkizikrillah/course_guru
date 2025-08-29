<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LMS – Course & Lab</title>

    {{-- Tailwind + Alpine (CDN untuk demo) --}}
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
    @include('fe.navbar')

    {{-- WRAPPER --}}
    <div x-data="courseApp({{ $courses->count() }}, {{ json_encode($completedCourses ?? []) }})" class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-12 gap-6">

        {{-- SIDEBAR --}}
        @include('fe.sidebar')

        {{-- MAIN CONTENT --}}
        @include('fe.content')

    </div>

    {{-- AlpineJS Script --}}
    <script>
    function courseApp(totalCourses, completedCourses) {
        return {
            groupedCourses: @json($groupedCourses),
            completedCourses: completedCourses,
            openSection: '{{ $activeSection ?? '' }}',
            activeSlug: '{{ $activeSlug ?? '' }}',
            activeId: {{ $course->id ?? 'null' }},
            activeTitle: '{{ $title ?? '' }}',
            activeContent: `{!! addslashes($content ?? '') !!}`,
            activeLink: '{{ $link ?? '' }}',
            activeVideo: '{{ $videoLink ?? '' }}',
            progress: {{ $progressPercent ?? 0 }},
            prevCourse: @json($prevCourse),
            nextCourse: @json($nextCourse),

            toggleSection(section) {
                this.openSection = this.openSection === section ? null : section;
            },

            markComplete(courseId) {
                if(this.completedCourses.includes(courseId)) return;
                fetch(`{{ url('course') }}/${courseId}/complete`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: null
                })
                .then(res => res.json())
                .then(data => {
                    this.completedCourses.push(courseId);
                    this.progress = Math.round((this.completedCourses.length / totalCourses) * 100);

                    // Opsional: auto-next setelah selesai
                    if(this.nextCourse) {
                        window.location.href = `/course/${this.nextCourse.section}/${this.nextCourse.slug}`;
                    }
                });
            },

            goPrev() {
                if(this.prevCourse) {
                    window.location.href = `/course/${this.prevCourse.section}/${this.prevCourse.slug}`;
                }
            },

            goNext() {
                if(this.nextCourse) {
                    window.location.href = `/course/${this.nextCourse.section}/${this.nextCourse.slug}`;
                }
            }
        }
    }
    </script>

</body>
</html>
