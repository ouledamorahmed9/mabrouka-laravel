@extends('layouts.public')

@section('title', 'Détails du produit: ' . $product->name)

@section('content')

<div class="bg-black text-white pt-32 md:pt-40 pb-24">
    <div class="container mx-auto px-6">

        <!-- Breadcrumbs -->
        <nav class="text-sm mb-10 text-gray-400 animated-section">
            <a href="{{ route('home') }}" class="hover:text-amber-300 transition-colors">Accueil</a>
            <span class="mx-2">&gt;</span>
            <a href="{{ route('products') }}" class="hover:text-amber-300 transition-colors">Nos produits</a>
            <span class="mx-2">&gt;</span>
            <span class="text-white">{{ $product->name }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            
            <!-- ====== Image Gallery ====== -->
            <div class="animated-section space-y-4 relative">
                
                {{-- === STICKERS (LOGIQUE AMÉLIORÉE) === --}}
                <div class="absolute top-7 left-4 z-20 space-y-2">
                    @if($product->new_collection)
                        <span class="block bg-amber-500 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">Nouvelle Collection</span>
                    @endif
                    @if($product->style === 'Aaroussa')
                        <span class="block bg-pink-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">Aaroussa</span>
                    @endif
                    @if($product->style === 'Hadhara')
                        <span class="block bg-teal-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">Hadhara</span>
                    @endif
                    @if($product->for_sale)
                        <span class="block bg-green-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">À Vendre</span>
                    @endif
                    @if($product->for_rent)
                        <span class="block bg-blue-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-md shadow-lg">À Louer</span>
                    @endif
                </div>
                {{-- === STICKERS END === --}}

                <!-- Main Swiper -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper product-swiper-main rounded-lg overflow-hidden border border-gray-700 shadow-2xl">
                    <div class="swiper-wrapper">
                        {{-- === Main Image Slide === --}}
                        <div class="swiper-slide bg-gray-900">
                            <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[70vh] object-cover" />
                        </div>
                        {{-- === Gallery Image Slides === --}}
                        @if($product->gallery)
                            @foreach($product->gallery as $image)
                                <div class="swiper-slide bg-gray-900">
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}" class="w-full h-[70vh] object-cover" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-button-next hover:scale-110 transition-transform"></div>
                    <div class="swiper-button-prev hover:scale-110 transition-transform"></div>
                </div>

                <!-- Thumbnails Swiper -->
                <div thumbsSlider="" class="swiper product-swiper-thumbs">
                    <div class="swiper-wrapper">
                        {{-- === Main Image Thumbnail === --}}
                        <div class="swiper-slide rounded-md overflow-hidden cursor-pointer border-2 border-transparent transition-all duration-300 swiper-slide-thumb-active:border-amber-400">
                            <img src="{{ asset('storage/' . $product->image_url) }}" alt="Thumbnail of {{ $product->name }}" class="w-full h-28 object-cover" />
                        </div>
                        {{-- === Gallery Image Thumbnails === --}}
                        @if($product->gallery)
                            @foreach($product->gallery as $image)
                                <div class="swiper-slide rounded-md overflow-hidden cursor-pointer border-2 border-transparent transition-all duration-300 swiper-slide-thumb-active:border-amber-400">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Thumbnail of {{ $product->name }}" class="w-full h-28 object-cover" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <!-- ====== Product Details ====== -->
            <div class="animated-section space-y-8">
                <div>
                    <span class="bg-amber-400 text-black text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">{{ $product->category }}</span>
                    <h1 class="text-4xl md:text-5xl font-bold font-serif text-white mt-4 mb-3">{{ $product->name }}</h1>
                    @if($product->price > 0)
                        <p class="text-3xl font-serif text-amber-300">{{ number_format($product->price, 2) }} TND</p>
                    @endif
                </div>

                <!-- Attributes Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-center">
                    @if($product->for_sale)
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700 flex flex-col items-center justify-center space-y-1">
                        <span class="icon-placeholder text-amber-400"><!-- Sale Icon --></span>
                        <p class="font-semibold text-sm">À vendre</p>
                    </div>
                    @endif
                     @if($product->for_rent)
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700 flex flex-col items-center justify-center space-y-1">
                        <span class="icon-placeholder text-amber-400"><!-- Rent Icon --></span>
                        <p class="font-semibold text-sm">À louer</p>
                    </div>
                    @endif
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700 flex flex-col items-center justify-center space-y-1">
                        <span class="icon-placeholder text-amber-400"><!-- Color Icon --></span>
                        <p class="font-semibold text-sm">{{ $product->color }}</p>
                    </div>
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700 flex flex-col items-center justify-center space-y-1">
                        <span class="icon-placeholder text-amber-400"><!-- Pieces Icon --></span>
                        <p class="font-semibold text-sm">{{ $product->pieces }} Pièce(s)</p>
                    </div>
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700 flex flex-col items-center justify-center space-y-1">
                        <span class="icon-placeholder text-amber-400"><!-- Type Icon --></span>
                        <p class="font-semibold text-sm">{{ $product->type }}</p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gray-800 p-6 rounded-lg border-2 border-amber-400/50 shadow-lg">
                    <p class="text-lg text-white mb-2 font-serif">Contactez-nous pour cette création :</p>
                    <p class="text-2xl font-bold text-white mb-4">+216 29 713 903</p>
                    <a href="tel:+21629713903" class="w-full text-center bg-amber-400 text-black font-bold py-4 px-6 rounded-lg hover:bg-amber-300 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 uppercase tracking-wider">
                        <span>Appelez maintenant</span>
                    </a>
                </div>
                
                <!-- Description -->
                <div class="border-t border-gray-800 pt-8">
                    <h3 class="text-2xl font-semibold font-serif text-white mb-4">Description</h3>
                    <div class="text-gray-400 leading-relaxed prose prose-invert">{!! nl2br(e($product->description)) !!}</div>
                </div>
            </div>
        </div>

        <!-- ====== Vous pourriez aussi aimer ====== -->
        @if(isset($similarProducts) && count($similarProducts) > 0)
        <div class="mt-24 pt-16 border-t border-gray-800">
            <div class="text-center mb-12 animated-section">
                <h2 class="text-4xl font-bold font-serif text-white">Vous pourriez aussi aimer</h2>
                <p class="mt-2 text-gray-400">D'autres créations qui partagent le même esprit.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($similarProducts as $similar)
                    <div class="animated-section">
                        <a href="{{ route('product.detail', ['slug' => $similar->slug]) }}" class="group block bg-gray-900 rounded-lg overflow-hidden shadow-lg hover:shadow-amber-400/20 border border-gray-800 transition-all duration-300">
                            <div class="overflow-hidden">
                                <img src="{{ asset('storage/' . $similar->image_url) }}" alt="{{ $similar->name }}" class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110" />
                            </div>
                            <div class="p-5 text-center">
                                <h3 class="font-semibold text-lg text-white font-serif group-hover:text-amber-400 transition-colors">{{ $similar->name }}</h3>
                                 @if($similar->price > 0)
                                     <p class="text-amber-400">{{ number_format($similar->price, 2) }} TND</p>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize the thumbnail swiper
        const swiperThumbs = new Swiper(".product-swiper-thumbs", {
            spaceBetween: 12,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        // Initialize the main swiper and link it with the thumbnails
        const swiperMain = new Swiper(".product-swiper-main", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiperThumbs,
            },
        });
    });
</script>

@endsection

