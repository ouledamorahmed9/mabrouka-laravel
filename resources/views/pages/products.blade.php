@extends('layouts.public')

@section('title', 'Nos Collections')

@section('content')

<div x-data="{ filtersOpen: false }" class="bg-gray-900 text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-12 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Nos Collections</h1>
            <p class="mt-4 text-gray-400">Découvrez des pièces uniques où tradition et modernité se rencontrent.</p>
        </header>

        <!-- ====== Bouton pour ouvrir les filtres (Mobile/Tablette uniquement) ====== -->
        <div class="text-left mb-6 lg:hidden">
            <button @click="filtersOpen = true" class="inline-flex items-center space-x-2 bg-gray-800 border border-gray-700 px-5 py-2.5 rounded-lg text-white font-semibold hover:bg-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" /></svg>
                <span>Filtrer</span>
            </button>
        </div>
        
        <!-- Formulaire de filtres (contient les deux versions : mobile et desktop) -->
        <form id="filter-form" action="{{ route('products') }}" method="GET">
            
            <!-- ====== Panneau de Filtres Coulissant (Mobile/Tablette) ====== -->
            <div class="lg:hidden">
                <div x-show="filtersOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 z-40" @click.self="filtersOpen = false"></div>
                <div x-show="filtersOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed top-0 left-0 w-full max-w-sm h-full bg-gray-800 z-50 shadow-2xl flex flex-col">
                    <div class="flex items-center justify-between p-4 border-b border-gray-700">
                        <h2 class="text-lg font-semibold text-white">Filtres</h2>
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('products') }}" class="text-sm font-medium text-amber-400 hover:text-amber-300 transition-colors">Réinitialiser</a>
                            <button type="button" @click="filtersOpen = false" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                        </div>
                    </div>
                    <div class="p-6 space-y-6 overflow-y-auto flex-grow">
                        @include('pages.partials._filter_controls', ['prefix' => 'mobile'])
                    </div>
                </div>
            </div>

            <!-- ====== Barre de Filtres Horizontale (Desktop) ====== -->
            <div class="hidden lg:block bg-gray-800 p-4 rounded-lg mb-12 border border-gray-700">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4 items-end">
                    @include('pages.partials._filter_controls', ['prefix' => 'desktop'])
                    <a href="{{ route('products') }}" class="text-center text-sm font-medium text-amber-400 hover:text-amber-300 transition-colors py-2">Réinitialiser les filtres</a>
                </div>
            </div>

        </form>

        <!-- Container pour la grille des produits -->
        <div id="product-grid-container">
            @include('pages.partials._products_grid')
        </div>
        
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('filter-form');
    const productGridContainer = document.getElementById('product-grid-container');
    
    // Correction: On cible les deux boutons de réinitialisation
    const resetButtons = document.querySelectorAll('a[href="{{ route('products') }}"]');

    const triggerAnimations = () => {
        const animatedElements = productGridContainer.querySelectorAll('.animated-section');
        animatedElements.forEach(el => {
            el.classList.remove('is-visible');
            void el.offsetWidth;
            el.classList.add('is-visible');
        });
    };

    const handleFilterChange = () => {
        const formData = new FormData(form);
        const params = new URLSearchParams(formData).toString();
        const url = form.action + '?' + params;

        productGridContainer.style.opacity = '0.5';

        fetch(url, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            productGridContainer.innerHTML = html;
            window.history.pushState({path: url}, '', url);
            triggerAnimations();
            productGridContainer.style.opacity = '1';
        })
        .catch(error => {
            console.error('Erreur lors du filtrage:', error);
            productGridContainer.style.opacity = '1';
        });
    };

    form.addEventListener('change', handleFilterChange);

    resetButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            form.reset();
            handleFilterChange();
        });
    });

    document.body.addEventListener('click', function(e) {
        if (e.target.closest('#pagination-links a')) {
            e.preventDefault();
            const url = e.target.closest('a').href;
            productGridContainer.style.opacity = '0.5';
            
            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(response => response.text())
            .then(html => {
                productGridContainer.innerHTML = html;
                window.history.pushState({path: url}, '', url);
                triggerAnimations();
                productGridContainer.style.opacity = '1';
                // Fait défiler jusqu'en haut de la grille de produits
                document.getElementById('product-grid-container').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        }
    });

    triggerAnimations();
});
</script>

<style>
    .radio-label { background-color: transparent; color: #d1d5db; }
    input[type="radio"]:checked + .radio-label { background-color: #f59e0b; color: #000; font-weight: bold; }
    .toggle-switch { position: relative; display: inline-block; width: 40px; height: 24px; border-radius: 9999px; transition: background-color .3s; }
    .toggle-switch::after { content: ''; position: absolute; width: 18px; height: 18px; border-radius: 50%; background-color: white; top: 3px; left: 3px; transition: transform .3s; }
    .toggle-checkbox:checked + .toggle-switch { background-color: #f59e0b; }
    .toggle-checkbox:checked + .toggle-switch::after { transform: translateX(16px); }
    #product-grid-container { transition: opacity 0.3s ease-in-out; }
    .animated-section { opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease-out, transform 0.5s ease-out; }
    .animated-section.is-visible { opacity: 1; transform: translateY(0); }
</style>

@endsection

