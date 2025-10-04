@extends('layouts.app')

@section('title', 'Nos Collections')

@section('content')

<div class="bg-gray-900 text-white pt-28 md:pt-36">
    <div class="container mx-auto px-6">
        <header class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Nos Collections</h1>
            <p class="mt-4 text-gray-400">Découvrez des pièces uniques où tradition et modernité se rencontrent.</p>
        </header>
        
        {{-- Filters can be added here later --}}

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 pb-24">
            @forelse($products as $product)
               <div class="animated-section">
                   <div class="group overflow-hidden rounded-lg shadow-lg bg-black border border-gray-800">
                       <div class="relative">
                           <img src="{{ $product['imageUrl'] }}" alt="{{ $product['name'] }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                           <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                               <button class="bg-white text-black font-bold py-2 px-6 rounded-full transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 uppercase text-sm tracking-wider">
                                   Ajouter au panier
                               </button>
                           </div>
                       </div>
                       <div class="p-5 text-center">
                           <h3 class="font-semibold text-lg text-white font-serif">{{ $product['name'] }}</h3>
                           <p class="text-amber-400">{{ $product['price'] }} TND</p>
                       </div>
                   </div>
               </div>
            @empty
                <div class="text-center py-24 col-span-full">
                    <p class="text-gray-500">Aucun produit disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
