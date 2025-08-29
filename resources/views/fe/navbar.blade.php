{{-- NAVBAR --}}
<nav class="w-full brand-gradient text-white">
    <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-2xl bg-white/20 flex items-center justify-center backdrop-blur">
                <!-- simple logo -->
                <span class="font-black">C</span>
            </div>
            <span class="font-semibold tracking-wide">Course Pelatihan Tenaga Pendidik</span>
        </div>

        {{-- Profile dropdown --}}
        <div x-data="{open:false}" class="relative">
            <button @click="open=!open" class="flex items-center gap-3 hover:bg-white/10 px-3 py-2 rounded-xl">
                <img src="https://i.pravatar.cc/60?img=12" class="w-8 h-8 rounded-full ring-2 ring-white/30"
                    alt="avatar">
                <span class="hidden sm:block font-medium">{{ auth()->user()->name }}</span>
                <svg class="w-4 h-4 opacity-90" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.086l3.71-3.855a.75.75 0 111.08 1.04l-4.24 4.4a.75.75 0 01-1.08 0l-4.24-4.4a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <div x-show="open" @click.away="open=false"
                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl overflow-hidden z-50">
                <div class="h-px bg-gray-100"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-50 text-red-600">
                        Logout
                    </button>
                </form>
            </div>
        </div>

    </div>
</nav>