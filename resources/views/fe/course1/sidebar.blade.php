<aside class="col-span-12 md:col-span-4 lg:col-span-3 space-y-4" x-data="{ openSection: '{{ $activeSection ?? '' }}' }">

    @foreach($groupedCourses as $section => $items)
        <div class="mb-2">
            <!-- Judul Section -->
            <button @click="openSection = (openSection === '{{ $section }}' ? null : '{{ $section }}')" class="w-full flex justify-between items-center px-3 py-2 rounded-lg font-semibold text-left
                           bg-gray-100 hover:bg-gray-200">
                {{ ucfirst($section) }}
                <svg class="w-4 h-4 transform transition-transform"
                    :class="{ 'rotate-90': openSection === '{{ $section }}' }" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- List Subbab -->
            <div x-show="openSection === '{{ $section }}'" class="ml-4 space-y-2 mt-2" x-collapse>
                @foreach($items as $item)
                    <a href="{{ route('course.show', ['section' => $item->section, 'slug' => $item->slug]) }}" class="flex items-center px-2 py-1 rounded-md transition
                                    {{ ($activeSlug ?? '') === $item->slug
                    ? 'text-blue-600 font-medium bg-blue-50'
                    : 'text-gray-700 hover:text-blue-500' }}">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 0V6m0 6v6" />
                        </svg>
                        📘 {{ $item->title }}
                    </a>
                @endforeach
            </div>
        </div>
    @endforeach
</aside>