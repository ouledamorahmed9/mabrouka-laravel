@extends('layouts.public')

@section('title', 'Foire Aux Questions')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        
        {{-- Header --}}
        <header class="text-center mb-20 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Foire aux Questions</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Retrouvez ici les réponses aux questions les plus fréquentes sur nos robes traditionnelles, la location, la vente et la livraison.</p>
        </header>

        {{-- FAQ Accordion --}}
        <div class="max-w-3xl mx-auto space-y-4 animated-section">

            <!-- Question 1 -->
            <div x-data="{ open: true }" class="bg-gray-900 border border-gray-800 rounded-lg">
                <h2>
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full p-6 font-semibold text-left text-white">
                        <span class="text-lg font-serif">1. Comment puis-je louer une robe traditionnelle ?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </h2>
                <div x-show="open" x-collapse class="p-6 pt-0 text-gray-400">
                    <p>Vous pouvez parcourir notre collection en ligne, choisir la robe qui vous plaît, puis nous contacter directement via la page du produit pour finaliser la location. Nous organiserons ensuite la livraison pour la date souhaitée.</p>
                </div>
            </div>

            <!-- Question 2 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-800 rounded-lg">
                <h2>
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full p-6 font-semibold text-left text-white">
                        <span class="text-lg font-serif">2. Quelle est la durée maximale de location ?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </h2>
                <div x-show="open" x-collapse class="p-6 pt-0 text-gray-400">
                    <p>La durée standard de location est de 1 jour, mais nous sommes flexibles. Une extension est possible selon la disponibilité de la robe. Contactez-nous pour discuter de vos besoins spécifiques.</p>
                </div>
            </div>

            <!-- Question 3 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-800 rounded-lg">
                <h2>
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full p-6 font-semibold text-left text-white">
                        <span class="text-lg font-serif">3. Proposez-vous des retouches ou des personnalisations ?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </h2>
                <div x-show="open" x-collapse class="p-6 pt-0 text-gray-400">
                    <p>Oui, certaines de nos robes peuvent être ajustées pour garantir une coupe parfaite. Des personnalisations plus poussées sont également possibles sur demande. Veuillez nous contacter bien à l'avance pour connaître les options et les délais.</p>
                </div>
            </div>

            <!-- Question 4 -->
            <div x-data="{ open: false }" class="bg-gray-900 border border-gray-800 rounded-lg">
                <h2>
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full p-6 font-semibold text-left text-white">
                        <span class="text-lg font-serif">4. Quels sont les modes de paiement acceptés ?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </h2>
                <div x-show="open" x-collapse class="p-6 pt-0 text-gray-400">
                    <p>Nous acceptons une variété de modes de paiement pour votre commodité : paiements en espèces, par carte bancaire, PayPal, ainsi que par virement postal ou bancaire.</p>
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="mt-20 pt-12 border-t border-gray-800 text-center">
            <h3 class="text-2xl font-serif font-semibold text-white">Vous avez d'autres questions ?</h3>
            <p class="text-gray-400 mt-2 mb-6">Notre équipe est là pour vous aider. N’hésitez pas à nous contacter.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-amber-400 text-black font-bold py-3 px-8 rounded-full hover:bg-amber-300 transition-colors duration-300 transform hover:scale-105">
                Contactez-nous
            </a>
        </div>

    </div>
</div>
@endsection

