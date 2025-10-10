@extends('layouts.public')

@section('title', 'Nos Collections')

@section('content')

<div class="bg-gray-900 text-white pt-28 md:pt-36">
    <div class="container mx-auto px-6">
        <header class="text-center mb-12 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Nos Collections</h1>
            <p class="mt-4 text-gray-400">Découvrez des pièces uniques où tradition et modernité se rencontrent.</p>
        </header>
        
        <!-- ====== Section des Filtres ====== -->
        <form id="filter-form" action="{{ route('products') }}" method="GET" class="bg-gray-800 p-6 rounded-lg mb-12 animated-section border border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Filtre Catégories -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-300 mb-2">Catégories</label>
                    <select name="category" id="category" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
                        <option value="tous">Toutes les catégories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Filtre Couleur -->
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-300 mb-2">Couleur</label>
                    <select name="color" id="color" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
                        <option value="tous">Toutes les couleurs</option>
                         @foreach($colors as $color)
                            <option value="{{ $color }}" {{ request('color') == $color ? 'selected' : '' }}>{{ $color }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Filtre Type -->
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-300 mb-2">Type</label>
                    <select name="type" id="type" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
                        <option value="tous">Tous les types</option>
                         @foreach($types as $type)
                            <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Filtre Disponibilité -->
                <div class="md:col-span-3 lg:col-span-1">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Disponibilité</label>
                    <div class="flex space-x-4 bg-gray-700 rounded-md p-2">
                        <div class="flex-1">
                            <input type="radio" name="availability" value="tous" id="avail-tous" class="hidden" {{ !request('availability') || request('availability') == 'tous' ? 'checked' : '' }}>
                            <label for="avail-tous" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors">Tous</label>
                        </div>
                        <div class="flex-1">
                            <input type="radio" name="availability" value="location" id="avail-location" class="hidden" {{ request('availability') == 'location' ? 'checked' : '' }}>
                            <label for="avail-location" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors">Location</label>
                        </div>
                         <div class="flex-1">
                            <input type="radio" name="availability" value="vente" id="avail-vente" class="hidden" {{ request('availability') == 'vente' ? 'checked' : '' }}>
                            <label for="avail-vente" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors">Vente</label>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <!-- ====== Grille des Produits ====== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($products as $product)
               <div class="animated-section">
                   <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="group block">
                       <div class="overflow-hidden rounded-lg shadow-lg bg-black border border-gray-800 h-full">
                           <div class="relative">
                               <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                           </div>
                           <div class="p-5 text-center">
                               <h3 class="font-semibold text-lg text-white font-serif">{{ $product->name }}</h3>
@if($product->price > 0)
    <p class="mt-1 text-lg font-medium text-white">{{ $product->price }} TND</p>
@endif
                           </div>
                       </div>
                   </a>
               </div>
            @empty
                <div class="text-center py-24 col-span-full">
                    <h3 class="text-2xl font-semibold text-gray-300">Aucun produit ne correspond à votre recherche.</h3>
                    <p class="text-gray-500 mt-2">Essayez de modifier ou de réinitialiser vos filtres.</p>
                    <a href="{{ route('products') }}" class="mt-6 inline-block bg-amber-400 text-black font-bold py-2 px-6 rounded-full hover:bg-amber-300 transition-colors">
                        Voir tous les produits
                    </a>
                </div>
            @endforelse
        </div>
        
        {{-- === PAGINATION LINKS === --}}
        <div class="mt-12 pb-12">
            {{ $products->appends(request()->query())->links() }}
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterForm = document.getElementById('filter-form');
        const formElements = filterForm.querySelectorAll('select, input[type="radio"]');

        formElements.forEach(element => {
            element.addEventListener('change', () => {
                filterForm.submit();
            });
        });
    });
</script>

<style>
    .radio-label {
        background-color: transparent;
        color: #d1d5db; /* gray-300 */
    }
    input[type="radio"]:checked + .radio-label {
        background-color: #b68f40; /* amber-400 */
        color: #000000; /* black */
        font-weight: bold;
    }
</style>

@endsection

