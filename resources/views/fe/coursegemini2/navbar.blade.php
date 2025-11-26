{{-- NAVBAR --}}
<nav class="w-full brand-gradient text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-2xl bg-white/20 flex items-center justify-center backdrop-blur">
                <span class="font-black text-xl">C</span>
            </div>
            <span class="font-semibold text-sm sm:text-base tracking-wide uppercase">
                TEACHER DEVELOPMENT PROGRAM
            </span>
        </div>

        {{-- Profile dropdown --}}
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center gap-2 hover:bg-white/10 px-4 py-2 rounded-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 7.5a4.75 4.75 0 11-7.5 0 4.75 4.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
                </svg>
                <span class="hidden sm:block font-medium">{{ auth()->user()->name }}</span>
                <svg class="w-4 h-4 opacity-90" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.09l4.71-4.86a.75.75 0 111.08 1.04l-4.24 4.4a.75.75 0 01-1.08 0l-4.24-4.4a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="open" @click.away="open=false"
                class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl overflow-hidden z-50">
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
