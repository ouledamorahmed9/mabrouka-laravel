@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

{{-- Hero Section --}}
<header class="h-screen relative overflow-hidden">
    <!-- Swiper -->
    <div class="swiper hero-swiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/1a1a1a/444444?text=Collection+Najla+I')"></div>
            <!-- Slide 2 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/b68f40/000000?text=Élégance+Pure')"></div>
            <!-- Slide 3 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/333333/ffffff?text=Artisanat+d\'Exception')"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
    </div>

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-white">
        <div class="text-center z-10 p-4 animate-fade-in-up">
            <h1 class="text-4xl md:text-6xl font-extrabold font-serif mb-4 tracking-wider text-amber-300">Collection 2025</h1>
            <p class="text-2xl md:text-4xl mb-8 font-light">Modèle Najla II</p>
            <a href="{{ route('products') }}" class="bg-amber-400 text-black font-bold py-3 px-10 rounded-full hover:bg-amber-300 transform hover:scale-105 transition-all duration-300 uppercase tracking-wider">
                Voir toute la collection
            </a>
        </div>
    </div>
</header>

{{-- Services Section --}}
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Nos Services Exclusifs</h2>
            <p class="mt-4 text-gray-400 max-w-2xl mx-auto">Une expérience sur mesure pour des moments inoubliables.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="animated-section p-8 bg-gray-800 rounded-lg shadow-2xl border border-gray-700">
                <h3 class="text-2xl font-semibold mb-4 text-amber-400 font-serif">Location de Robes</h3>
                <p class="mb-6 text-gray-300">Accédez à une collection de robes de créateurs pour vos plus grands événements.</p>
                {{-- Add list items here --}}
            </div>
            <div class="animated-section p-8 bg-gray-800 rounded-lg shadow-2xl border border-gray-700">
                <h3 class="text-2xl font-semibold mb-4 text-amber-400 font-serif">Vente de Robes</h3>
                <p class="mb-6 text-gray-300">Devenez propriétaire d'une pièce d'exception.</p>
                {{-- Add list items here --}}
            </div>
        </div>
    </div>
</section>



{{-- Best Sellers Section --}}
<section class="py-20 md:py-28 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Meilleures Ventes</h2>
            <p class="mt-4 text-gray-400">Les créations qui captivent et inspirent.</p>
        </div>
        
        <!-- Swiper -->
        <div class="swiper bestsellers-swiper animated-section">
            <div class="swiper-wrapper pb-16">
                @foreach($bestsellers as $product)
                    <div class="swiper-slide">
                        <div class="group overflow-hidden rounded-lg shadow-lg bg-gray-800 border border-gray-700 h-full">
                            <div class="relative">
                                <img src="{{ $product['imageUrl'] }}" alt="{{ $product['name'] }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <a href="#" class="bg-white text-black font-bold py-2 px-6 rounded-full transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 uppercase text-sm tracking-wider">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <h3 class="font-semibold text-lg text-white font-serif">{{ $product['name'] }}</h3>
                                <p class="text-amber-400">{{ $product['price'] }} TND</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination-bestsellers text-center mt-8 relative"></div>
        </div>
    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Pourquoi Nous Choisir ?</h2>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Nous combinons tradition, qualité et service personnalisé.</p>
        </div>
        {{-- Add content here --}}
    </div>
</section>
{{-- Testimonials Section --}}
<section class="py-20 md:py-28 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">L'Avis de Nos Clientes</h2>
            <p class="mt-4 text-gray-400">Elles nous ont fait confiance et partagent leur expérience.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="animated-section">
                    <div class="bg-black p-8 rounded-lg shadow-2xl border border-gray-700 h-full flex flex-col">
                        <div class="flex items-center mb-4 text-amber-400">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            @endfor
                        </div>
                        <p class="text-gray-300 italic mb-6 flex-grow">"{{ $testimonial['quote'] }}"</p>
                        <div>
                            <p class="font-bold text-white">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-gray-500">{{ $testimonial['location'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Blog Section --}}
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Le Journal</h2>
            <p class="mt-4 text-gray-400">Inspirations, tendances et savoir-faire.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($blogPosts as $post)
                <div class="animated-section">
                    <div class="bg-gray-800 rounded-lg shadow-2xl overflow-hidden group border border-gray-700">
                        <img src="{{ $post['imageUrl'] }}" alt="{{ $post['title'] }}" class="w-full h-56 object-cover" />
                        <div class="p-6">
                            <p class="text-xs text-gray-400 mb-2 uppercase">{{ $post['date'] }}</p>
                            <h3 class="font-bold text-xl mb-3 text-white group-hover:text-amber-400 transition-colors font-serif">{{ $post['title'] }}</h3>
                            <p class="text-gray-300 text-sm mb-4">{{ $post['excerpt'] }}</p>
                            <a href="#" class="font-semibold text-amber-400 hover:underline">Lire la suite &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

