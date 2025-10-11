@extends('layouts.public')

@section('title', 'Accueil')

@section('content')

    {{-- Hero Section --}}
    <header class="h-screen relative overflow-hidden">
        <div class="swiper hero-swiper h-full">
            <div class="swiper-wrapper">
                
                @forelse($sliders as $slider)
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $slider->image_url) }}')"></div>
                    <div class="absolute inset-0 bg-black/60"></div>
                    
                    <div class="absolute inset-0 flex flex-col items-center justify-end text-center text-white pb-24">
                        <div class="text-center p-4 animate-fade-in-up">
                            @if($slider->title)
                                <h1 class="text-5xl md:text-7xl font-extrabold font-serif mb-5 tracking-wider">{{ $slider->title }}</h1>
                            @endif
                            @if($slider->subtitle)
                                <p class="text-2xl md:text-3xl mb-8 font-light">{{ $slider->subtitle }}</p>
                            @endif
                           <a href="{{ route('products') }}" class="bg-amber-400 text-black font-bold  py-4 px-10 rounded-full hover:bg-amber-300 transform hover:scale-105 transition-all duration-300 uppercase tracking-wider">
                                Voir toute la collection
                            </a>  
                        </div>
                    </div>
                </div>
                @empty
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/backgroundimg.png') }}')"></div>
                    <div class="absolute inset-0 bg-black/60"></div>
                     <div class="absolute inset-0 flex flex-col items-center justify-end text-center text-white pb-24">
                        <div class="text-center p-4 animate-fade-in-up">
                            <h1 class="text-5xl md:text-7xl font-extrabold font-serif mb-2 tracking-wider">Mabrouka Fashion</h1>
                            <p class="text-2xl md:text-3xl mb-8 font-light">Robes Traditionnelles de Luxe</p>
                            <a href="{{ route('products') }}" class="bg-amber-400 text-black font-bold py-4 px-10 rounded-full hover:bg-amber-300 transform hover:scale-105 transition-all duration-300 uppercase tracking-wider">
                                Découvrir la collection
                            </a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>
    </header>

{{-- Highlighted Services Section --}}
<section class="bg-gray-900 py-20 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 text-center">
            {{-- Service 1 --}}
            <div class="animated-section">
                <div class="flex justify-center mb-5">
                    <div class="bg-gray-800 rounded-full p-4">
                        <svg class="w-10 h-10 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold font-serif text-white mb-3">Réserver Une Robe</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Prenez rendez-vous en ligne pour essayer la robe de vos rêves en boutique.</p>
            </div>
            {{-- Service 2 --}}
            <div class="animated-section" style="animation-delay: 0.1s;">
                <div class="flex justify-center mb-5">
                    <div class="bg-gray-800 rounded-full p-4">
                        <svg class="w-10 h-10 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold font-serif text-white mb-3">Click & Collect</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Commandez en ligne et récupérez votre robe facilement dans notre boutique.</p>
            </div>
            {{-- Service 3 --}}
            <div class="animated-section" style="animation-delay: 0.2s;">
                <div class="flex justify-center mb-5">
                    <div class="bg-gray-800 rounded-full p-4">
                        <svg class="w-10 h-10 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold font-serif text-white mb-3">Livraison</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Nous livrons partout en Tunisie. Votre robe, soigneusement préparée, arrive chez vous.</p>
            </div>
            {{-- Service 4 --}}
            <div class="animated-section" style="animation-delay: 0.3s;">
                <div class="flex justify-center mb-5">
                    <div class="bg-gray-800 rounded-full p-4">
                        <svg class="w-10 h-10 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4H5z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold font-serif text-white mb-3">Emballage Élégant</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Chaque robe est emballée avec goût, idéale pour offrir ou transporter sans souci.</p>
            </div>
        </div>
    </div>
</section>

{{-- === NEW COLLECTION SECTION === --}}
@if($new_collection->isNotEmpty())
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Nouvelle Collection</h2>
            <p class="mt-4 text-gray-400">Découvrez les dernières pièces fraîchement arrivées.</p>
        </div>
        
        <div class="swiper new-collection-swiper animated-section">
            <div class="swiper-wrapper pb-16">
                @foreach($new_collection as $product)
                    <div class="swiper-slide h-auto">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 h-full flex flex-col">
                            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="group block">
                                <div class="relative overflow-hidden">
                                    <div class="absolute top-3 left-3 z-10 space-y-2">
                                        @if($product->new_collection)
                                            <span class="block bg-amber-500 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">Nouvelle Collection</span>
                                        @endif
                                        @if($product->for_sale)
                                            <span class="block bg-green-600 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">À Vendre</span>
                                        @elseif($product->for_rent)
                                            <span class="block bg-blue-600 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">À Louer</span>
                                        @endif
                                            @if($product->style === 'Aaroussa')
        <span class="block bg-pink-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">Aaroussa</span>
    @elseif($product->style === 'Hadhara')
        <span class="block bg-teal-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">Hadhara</span>
    @endif

                                    </div>
                                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-5 text-center flex-grow flex flex-col justify-between">
                                    <h3 class="font-semibold text-lg text-white font-serif group-hover:text-amber-300 transition-colors">{{ $product->name }}</h3>
                                    @if($product->price > 0)
                                        <p class="text-amber-400 mt-2">{{ number_format($product->price, 2) }} TND</p>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination-new-collection text-center mt-8 relative"></div>
        </div>
    </div>
</section>
@endif

{{-- === BESTSELLERS SECTION === --}}
@if($bestsellers->isNotEmpty())
<section class="py-20 md:py-28 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Meilleures Ventes</h2>
            <p class="mt-4 text-gray-400">Les créations qui captivent et inspirent.</p>
        </div>
        
        <div class="swiper bestsellers-swiper animated-section">
            <div class="swiper-wrapper pb-16">
                @foreach($bestsellers as $product)
                    <div class="swiper-slide h-auto">
                        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 h-full flex flex-col">
                           <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="group block">
                                <div class="relative overflow-hidden">
                                    <div class="absolute top-3 left-3 z-10 space-y-2">
                                        @if($product->new_collection)
                                            <span class="block bg-amber-500 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">Nouvelle Collection</span>
                                        @endif
                                        @if($product->for_sale)
                                            <span class="block bg-green-600 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">À Vendre</span>
                                        @elseif($product->for_rent)
                                            <span class="block bg-blue-600 text-white text-xs font-bold uppercase px-2 py-1 rounded-md shadow-lg">À Louer</span>
                                        @endif
                                    </div>
                                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-5 text-center flex-grow flex flex-col justify-between">
                                    <h3 class="font-semibold text-lg text-white font-serif group-hover:text-amber-300 transition-colors">{{ $product->name }}</h3>
                                    @if($product->price > 0)
                                        <p class="text-amber-400 mt-2">{{ number_format($product->price, 2) }} TND</p>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination-bestsellers text-center mt-8 relative"></div>
        </div>
    </div>
</section>
@endif


<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Pourquoi Nous Choisir ?</h2>
            <p class="mt-4 text-gray-400 max-w-4xl mx-auto">
                Chez Mabrouka Fashion, nous combinons tradition, qualité et service personnalisé pour vous offrir la meilleure expérience dans la location et la vente de robes traditionnelles tunisiennes.
            </p>
        </div>
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div class="animated-section space-y-10">
                 <div>
                    <h3 class="text-3xl font-serif font-semibold text-amber-300">Expertise Locale et Passion Artisanale</h3>
                    <p class="mt-4 text-gray-400 leading-relaxed">
                        Nous connaissons parfaitement le patrimoine tunisien et travaillons directement avec des artisans locaux pour vous proposer des pièces authentiques et élégantes.
                    </p>
                </div>
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-400/10 border border-amber-400/30 text-amber-400 rounded-full h-12 w-12 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg">Collection Sélectionnée avec Soin</h4>
                            <p class="text-gray-400">Chaque robe est minutieusement choisie et entretenue pour garantir style, confort et authenticité, que ce soit pour la location ou l'achat.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-400/10 border border-amber-400/30 text-amber-400 rounded-full h-12 w-12 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.417l5.611-5.611A12.025 12.025 0 0112 14.817a12.025 12.025 0 015.611-.561L12 21.056l5.618-5.618A12.025 12.025 0 0021 8.944c0-2.392-.686-4.632-1.882-6.528z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg">Satisfaction Garantie</h4>
                            <p class="text-gray-400">Plusieurs centaines de clientes satisfaites ont trouvé chez nous la robe parfaite pour leurs occasions spéciales.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-400/10 border border-amber-400/30 text-amber-400 rounded-full h-12 w-12 flex items-center justify-center">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-lg">Service Client Dédié</h4>
                            <p class="text-gray-400">Notre équipe est à votre écoute, que ce soit pour un essayage en boutique, une réservation en ligne ou une livraison rapide partout en Tunisie.</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                     <a href="{{ route('contact') }}" class="inline-block border border-amber-400 text-amber-400 font-bold py-3 px-10 rounded-full hover:bg-amber-400 hover:text-black transition-all duration-300">
                        Contactez notre équipe
                    </a>
                </div>
            </div>

            <div id="stats-section" class="animated-section space-y-8">
                <div class="grid sm:grid-cols-2 gap-8">
                    <div class="bg-gray-900 p-8 rounded-lg shadow-2xl border border-gray-800 text-center">
                        <p class="text-5xl font-bold font-serif text-amber-400">
                            <span class="count-up" data-target="250">0</span>+
                        </p>
                        <p class="mt-2 text-white font-semibold">+250 robes disponibles</p>
                        <p class="mt-1 text-sm text-gray-400">Une large sélection pour tous les goûts et styles.</p>
                    </div>
                     <div class="bg-gray-900 p-8 rounded-lg shadow-2xl border border-gray-800 text-center">
                        <p class="text-5xl font-bold font-serif text-amber-400">
                            <span class="count-up" data-target="98">0</span>%
                        </p>
                        <p class="mt-2 text-white font-semibold">Taux de satisfaction client</p>
                        <p class="mt-1 text-sm text-gray-400">Des retours positifs et des clientes fidèles.</p>
                    </div>
                     <div class="bg-gray-900 p-8 rounded-lg shadow-2xl border border-gray-800 text-center">
                        <p class="text-5xl font-bold font-serif text-amber-400">
                            <span class="count-up" data-target="300">0</span>+
                        </p>
                        <p class="mt-2 text-white font-semibold">Livraison partout en Tunisie</p>
                        <p class="mt-1 text-sm text-gray-400">Où que vous soyez, recevez votre robe rapidement.</p>
                    </div>
                     <div class="bg-gray-900 p-8 rounded-lg shadow-2xl border border-gray-800 text-center">
                        <p class="text-5xl font-bold font-serif text-amber-400">
                            <span class="count-up" data-target="10">0</span>+
                        </p>
                        <p class="mt-2 text-white font-semibold">Des années d'expérience</p>
                        <p class="mt-1 text-sm text-gray-400">Une équipe passionnée et professionnelle à votre service.</p>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
</section>

{{-- === TESTIMONIALS SECTION === --}}
@if(count($testimonials) > 0)
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
@endif

{{-- === COLLABORATIONS SECTION === --}}
@if($collaborations->isNotEmpty())
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Nos Partenaires de Confiance</h2>
            <p class="mt-4 text-gray-400">Ils nous soutiennent et collaborent avec nous.</p>
        </div>
        
        <div class="swiper collaborations-swiper">
            <div class="swiper-wrapper">
                @foreach($collaborations as $collaboration)
                    <div class="swiper-slide">
                        <button type="button" class="collaboration-logo-btn flex flex-col items-center justify-center space-y-6 group h-full"
                                data-gallery-images="{{ json_encode($collaboration->gallery) }}"
                                data-partner-name="{{ $collaboration->name }}">
                            <div class="w-32 h-32 rounded-full bg-gray-800 border-2 border-gray-700 flex items-center justify-center p-2 group-hover:border-amber-400/50 transition-colors duration-300">
                                <img src="{{ asset('storage/' . $collaboration->logo_url) }}" alt="{{ $collaboration->name }}" class="h-full w-full object-contain rounded-full grayscale group-hover:grayscale-0 transition-all duration-300">
                            </div>
                            <p class="text-gray-400 font-semibold text-center group-hover:text-white transition-colors duration-300">{{ $collaboration->name }}</p>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

{{-- === BLOG SECTION === --}}
@if($blogPosts->isNotEmpty())
<section class="py-20 md:py-28 bg-black">
    <div class="container mx-auto px-6">
        <div class="animated-section text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-serif text-white">Le Journal</h2>
            <p class="mt-4 text-gray-400">Inspirations, tendances et savoir-faire.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogPosts as $post)
                <div class="animated-section @if($loop->iteration > 2) hidden sm:hidden lg:block @endif">
                    <div class="bg-gray-800 rounded-lg shadow-2xl overflow-hidden group border border-gray-700 h-full flex flex-col">
                        <div class="overflow-hidden">
                           <img src="{{ asset('storage/' . $post->image_url) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300" />
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-xs text-gray-400 mb-2 uppercase">{{ $post->date->format('d F Y') }}</p>
                            <h3 class="font-bold text-xl mb-3 text-white group-hover:text-amber-400 transition-colors font-serif flex-grow">{{ $post->title }}</h3>
                            <p class="text-gray-300 text-sm mb-4">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}" class="font-semibold text-amber-400 hover:underline self-start">Lire la suite &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12 animated-section">
            <a href="{{ route('blog') }}" class="bg-amber-400 text-black font-bold py-3 px-10 rounded-full hover:bg-amber-300 transform hover:scale-105 transition-all duration-300 uppercase tracking-wider">
                Voir tous les articles
            </a>
        </div>
    </div>
</section>
@endif

{{-- === START OF MODAL AND SCRIPT === --}}
<!-- Collaboration Gallery Modal -->
<div id="gallery-modal" class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center p-4">
    <div class="bg-gray-900 rounded-lg shadow-2xl w-full max-w-4xl max-h-[90vh] flex flex-col relative border border-gray-700">
        <div class="flex justify-between items-center p-4 border-b border-gray-800">
            <h3 id="modal-partner-name" class="text-xl font-semibold text-white font-serif"></h3>
            <button id="close-modal-btn" class="text-gray-400 hover:text-white text-3xl font-bold">&times;</button>
        </div>
        <div class="p-4 flex-grow overflow-hidden">
            <div class="swiper modal-swiper h-full">
                <div class="swiper-wrapper" id="modal-swiper-wrapper">
                    <!-- Slides will be injected here by JavaScript -->
                </div>
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT BLOCK for all page animations --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
        // New Arrivals Carousel Initialization
    const newArrivalsSwiper = new Swiper('.new-arrivals-swiper', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: { delay: 4500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination-new-arrivals', clickable: true },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 30 },
            1280: { slidesPerView: 4, spaceBetween: 30 },
        }
    });

    // Hero Slider Initialization
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    });
    // New Collection Swiper
    if (document.querySelector('.new-collection-swiper')) {
        const newCollectionSwiper = new Swiper('.new-collection-swiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: { delay: 4500, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination-new-collection', clickable: true },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
                1280: { slidesPerView: 4, spaceBetween: 30 },
            }
        });
    }

    // Bestsellers Carousel Initialization
    if (document.querySelector('.bestsellers-swiper')) {
        const bestsellersSwiper = new Swiper('.bestsellers-swiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: { delay: 4000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination-bestsellers', clickable: true },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
                1280: { slidesPerView: 4, spaceBetween: 30 },
            }
        });
    }

    // Number count-up animation
    const animate = (obj, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) { window.requestAnimationFrame(step); }
        };
        window.requestAnimationFrame(step);
    };

    const statsSection = document.getElementById('stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = statsSection.querySelectorAll('.count-up');
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        animate(counter, 0, target, 1500);
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        observer.observe(statsSection);
    }

    // Collaborations Carousel Initialization
    const collaborationsSwiper = new Swiper('.collaborations-swiper', {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 3, spaceBetween: 30 },
            768: { slidesPerView: 4, spaceBetween: 40 },
            1024: { slidesPerView: 5, spaceBetween: 50 },
            1280: { slidesPerView: 6, spaceBetween: 60 },
        }
    });

    // Collaboration Modal Gallery Logic
    const modal = document.getElementById('gallery-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const modalPartnerName = document.getElementById('modal-partner-name');
    const modalSwiperWrapper = document.getElementById('modal-swiper-wrapper');
    let modalSwiper = null;

    const initModalSwiper = () => {
        if (modalSwiper) { modalSwiper.destroy(true, true); }
        modalSwiper = new Swiper('.modal-swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            pagination: { el: '.swiper-pagination', clickable: true },
        });
    };

    document.querySelectorAll('.collaboration-logo-btn').forEach(button => {
        button.addEventListener('click', function() {
            const galleryImages = JSON.parse(this.dataset.galleryImages || '[]');
            const partnerName = this.dataset.partnerName;

            if (galleryImages && galleryImages.length > 0) {
                modalPartnerName.textContent = partnerName;
                modalSwiperWrapper.innerHTML = ''; 

                galleryImages.forEach(imageSrc => {
                    const slide = `
                        <div class="swiper-slide flex items-center justify-center">
                            <img src="/storage/${imageSrc}" class="max-h-[70vh] w-auto object-contain rounded-lg">
                        </div>
                    `;
                    modalSwiperWrapper.insertAdjacentHTML('beforeend', slide);
                });

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                initModalSwiper();
            } else {
                // If no gallery, try to open the website URL
                const collaborationLink = this.closest('.swiper-slide').querySelector('a');
                 if(collaborationLink && collaborationLink.href && !collaborationLink.href.endsWith('#')) {
                    window.open(collaborationLink.href, '_blank');
                }
            }
        });
    });

    const closeModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modalSwiperWrapper.innerHTML = '';
    };

    closeModalBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (event) => {
        if (event.target === modal) { closeModal(); }
    });
});
</script>

@endsection

