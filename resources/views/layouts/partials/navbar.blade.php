<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{ isOpen: false, isScrolled: false }" @scroll.window="isScrolled = (window.pageYOffset > 10)" :class="{ 'bg-black/80 backdrop-blur-lg shadow-lg': isScrolled }">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        
        <a href="{{ route('home') }}">
            {{-- MODIFICATION : Taille du logo ajustée pour les mobiles --}}
            <img src="{{ asset('images/logo.png') }}" alt="Mabrouka Fashion Logo" class="h-12 md:h-14 w-auto transition-all duration-300">
        </a>

        <div class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('home') }}" class="text-white uppercase tracking-wider text-sm hover:text-amber-400 transition-colors duration-300 relative after:content-[''] after:absolute after:left-0 after:bottom-[-5px] after:h-[2px] after:bg-amber-400 after:transition-all after:duration-300 {{ request()->routeIs('home') ? 'after:w-full font-semibold text-amber-400' : 'after:w-0' }}">Accueil</a>
            <a href="{{ route('products') }}" class="text-white uppercase tracking-wider text-sm hover:text-amber-400 transition-colors duration-300 relative after:content-[''] after:absolute after:left-0 after:bottom-[-5px] after:h-[2px] after:bg-amber-400 after:transition-all after:duration-300 {{ request()->routeIs('products') ? 'after:w-full font-semibold text-amber-400' : 'after:w-0' }}">Nos Robes</a>
            <a href="{{ route('about') }}" class="text-white uppercase tracking-wider text-sm hover:text-amber-400 transition-colors duration-300 relative after:content-[''] after:absolute after:left-0 after:bottom-[-5px] after:h-[2px] after:bg-amber-400 after:transition-all after:duration-300 {{ request()->routeIs('about') ? 'after:w-full font-semibold text-amber-400' : 'after:w-0' }}">À Propos</a>
            <a href="{{ route('blog') }}" class="text-white uppercase tracking-wider text-sm hover:text-amber-400 transition-colors duration-300 relative after:content-[''] after:absolute after:left-0 after:bottom-[-5px] after:h-[2px] after:bg-amber-400 after:transition-all after:duration-300 {{ request()->routeIs('blog') ? 'after:w-full font-semibold text-amber-400' : 'after:w-0' }}">Blog</a>
            <a href="{{ route('contact') }}" class="text-white uppercase tracking-wider text-sm hover:text-amber-400 transition-colors duration-300 relative after:content-[''] after:absolute after:left-0 after:bottom-[-5px] after:h-[2px] after:bg-amber-400 after:transition-all after:duration-300 {{ request()->routeIs('contact') ? 'after:w-full font-semibold text-amber-400' : 'after:w-0' }}">Contact</a>
        </div>
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" x-show="!isOpen" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" x-show="isOpen" />
                </svg>
            </button>
        </div>
    </div>
    <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden bg-black/90 backdrop-blur-lg py-4">
        <a href="{{ route('home') }}" class="block text-center py-3 text-white uppercase tracking-wider hover:bg-white/10">Accueil</a>
        <a href="{{ route('products') }}" class="block text-center py-3 text-white uppercase tracking-wider hover:bg-white/10">Nos Robes</a>
        <a href="{{ route('about') }}" class="block text-center py-3 text-white uppercase tracking-wider hover:bg-white/10">À Propos</a>
        <a href="{{ route('blog') }}" class="block text-center py-3 text-white uppercase tracking-wider hover:bg-white/10">Blog</a>
        <a href="{{ route('contact') }}" class="block text-center py-3 text-white uppercase tracking-wider hover:bg-white/10">Contact</a>
    </div>
</nav>

<script src="//unpkg.com/alpinejs" defer></script>