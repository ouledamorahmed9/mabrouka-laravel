{{-- Product Grid --}}
<div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
    @forelse($products as $product)
        <div class="animated-section">
            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="group block">
                <div class="overflow-hidden rounded-lg shadow-lg bg-black border border-gray-800 h-full flex flex-col">
                    <div class="relative">
                        {{-- === STICKERS START (LOGIC UPDATED FOR MULTIPLE STICKERS) === --}}
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
                        {{-- === STICKERS END === --}}
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-5 text-center flex-grow flex flex-col justify-between">
                        <h3 class="font-semibold text-lg text-white font-serif group-hover:text-amber-300 transition-colors">{{ $product->name }}</h3>
                        @if($product->price > 0)
                            <p class="text-amber-400 mt-2">{{ number_format($product->price, 2) }} TND</p>
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

{{-- Pagination Links --}}
<div id="pagination-links" class="mt-12 pb-12">
    {{ $products->withQueryString()->links() }}
</div>

