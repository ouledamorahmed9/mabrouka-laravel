@extends('layouts.public')

@section('title', 'Foire Aux Questions (FAQ)')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Foire Aux Questions</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Trouvez les réponses aux questions les plus fréquemment posées.</p>
        </header>

        <div class="max-w-4xl mx-auto space-y-4 animated-section">
            <!-- Question 1 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-700 rounded-lg">
                <button @click="open = !open" class="flex items-center justify-between w-full p-6">
                    <h3 class="text-lg font-semibold text-white">Comment puis-je louer une robe ?</h3>
                    <svg class="w-6 h-6 text-amber-400 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-400">
                    <p>Pour louer une robe, parcourez notre collection, choisissez votre modèle préféré et contactez-nous via WhatsApp ou notre formulaire de contact pour vérifier la disponibilité et prendre un rendez-vous pour un essayage en boutique.</p>
                </div>
            </div>

            <!-- Question 2 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-700 rounded-lg">
                <button @click="open = !open" class="flex items-center justify-between w-full p-6">
                    <h3 class="text-lg font-semibold text-white">Quels sont les délais de livraison ?</h3>
                    <svg class="w-6 h-6 text-amber-400 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-400">
                    <p>Les délais de livraison varient en fonction de votre localisation. En Tunisie, la livraison standard prend entre 3 et 5 jours ouvrables, tandis que la livraison express prend 1 à 2 jours. Pour plus de détails, consultez notre page <a href="{{ route('shipping') }}" class="text-amber-400 hover:underline">Expédition et Livraison</a>.</p>
                </div>
            </div>

            <!-- Question 3 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-700 rounded-lg">
                <button @click="open = !open" class="flex items-center justify-between w-full p-6">
                    <h3 class="text-lg font-semibold text-white">Est-il possible d'acheter une robe mise en location ?</h3>
                    <svg class="w-6 h-6 text-amber-400 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-400">
                    <p>Oui, de nombreux modèles de notre collection de location sont également disponibles à la vente. Si vous avez un coup de cœur pour une robe, n'hésitez pas à nous le faire savoir. Nous proposons également des liquidations de fin de saison à des prix très attractifs.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
