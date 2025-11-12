<aside class="col-span-12 md:col-span-4 lg:col-span-3 space-y-4" x-data="{
        openBab: {{ $activeBabId ?? 'null' }},
        openSubbab: {{ $activeSubbabId ?? 'null' }}
    }">

    @foreach($bab as $b)
        <div class="mb-2">
            <!-- Judul Bab -->
            <button @click="openBab = (openBab === {{ $b->id }} ? null : {{ $b->id }})" class="w-full flex justify-between items-center px-3 py-2 rounded-lg font-semibold text-left
                           bg-gray-100 hover:bg-gray-200">
                {{ $b->title }}
                <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-90': openBab === {{ $b->id }} }"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- List Subbab -->
            <div x-show="openBab === {{ $b->id }}" class="ml-4 space-y-2 mt-2" x-collapse>
                @foreach($b->children as $subbab)
                    <div>
                        <!-- Judul Subbab -->
                        <button @click="openSubbab = (openSubbab === {{ $subbab->id }} ? null : {{ $subbab->id }})" class="w-full flex justify-between items-center px-2 py-1 rounded-md font-medium text-left
                                           bg-gray-50 hover:bg-gray-100">
                            {{ $subbab->title }}
                            <svg class="w-4 h-4 transform transition-transform"
                                :class="{ 'rotate-90': openSubbab === {{ $subbab->id }} }" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <!-- List Materi -->
                        <div x-show="openSubbab === {{ $subbab->id }}" class="ml-4 space-y-1 mt-1" x-collapse>
                            @foreach($subbab->children as $materi)
                                    <a href="{{ route('course4.show', $materi->slug) }}" class="flex items-center px-2 py-1 rounded-md transition
                                                    {{ ($activeSlug ?? '') === $materi->slug
                                ? 'text-blue-600 font-medium bg-blue-50'
                                : 'text-gray-700 hover:text-blue-500' }}">
                                        📘 {{ $materi->title }}
                                    </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</aside>