<header class="sticky top-0 z-50 bg-stone-50/90 backdrop-blur border-b border-stone-200">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center justify-between h-20">
        {{-- Logo --}}
        <a href="#home" class="flex items-center gap-2">
            <span class="w-9 h-9 rounded-lg bg-stone-900 flex items-center justify-center text-amber-500 font-bold">SB</span>
            <span class="text-lg font-semibold tracking-tight text-stone-900">Smokes <span class="text-amber-700">n'</span> Booze</span>
        </a>

        {{-- Desktop links --}}
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-600">
            <a href="#home" class="hover:text-stone-900 transition-colors">Home</a>
            <a href="#features" class="hover:text-stone-900 transition-colors">Features</a>
            <a href="#pricing" class="hover:text-stone-900 transition-colors">Pricing</a>
            <a href="#testimonials" class="hover:text-stone-900 transition-colors">Testimonials</a>
            <a href="#contact" class="hover:text-stone-900 transition-colors">Contact</a>
        </div>

        {{-- Auth buttons --}}
        <div class="hidden md:flex items-center gap-3">
            <x-button variant="ghost" href="#contact">Sign In</x-button>
            <x-button variant="primary" href="#pricing">Get Started</x-button>
        </div>

        {{-- Mobile toggle --}}
        <button x-data @click="$refs.mobileMenu.classList.toggle('hidden')" class="md:hidden p-2 text-stone-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div x-ref="mobileMenu" class="hidden md:hidden px-6 pb-6 flex flex-col gap-4 text-stone-600 font-medium border-t border-stone-200">
        <a href="#home" class="pt-4">Home</a>
        <a href="#features">Features</a>
        <a href="#pricing">Pricing</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact</a>
        <div class="flex gap-3 pt-2">
            <x-button variant="secondary" href="#contact">Sign In</x-button>
            <x-button variant="primary" href="#pricing">Get Started</x-button>
        </div>
    </div>
</header>
