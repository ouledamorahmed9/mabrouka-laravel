<!-- ====== Grille des Produits ====== -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
    @forelse($products as $product)
       {{-- On ajoute la classe 'product-card' pour le ciblage par le script d'animation --}}
       <div class="product-card animated-section">
           <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="group block">
               <div class="overflow-hidden rounded-lg shadow-lg bg-black border border-gray-800 h-full">
                   <div class="relative">
                       <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                   </div>
                   <div class="p-5 text-center">
                       <h3 class="font-semibold text-lg text-white font-serif">{{ $product->name }}</h3>
                        @if($product->price > 0)
                            <p class="mt-1 text-lg font-medium text-amber-400">{{ number_format($product->price, 2) }} TND</p>
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
    {{ $products->withQueryString()->links() }}
</div>

