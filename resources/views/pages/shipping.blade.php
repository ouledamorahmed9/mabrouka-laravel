@extends('layouts.public')

@section('title', 'Expédition et Livraison')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        
        {{-- Header --}}
        <header class="text-center mb-20 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Expédition et Livraison</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Découvrez comment nous préparons et expédions vos robes traditionnelles tunisiennes avec soin.</p>
        </header>

        {{-- Main Content - Redesigned --}}
        <div class="max-w-3xl mx-auto space-y-12 animated-section">

            <!-- Section 1: Préparation -->
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0 bg-gray-800 rounded-full h-16 w-16 flex items-center justify-center border-2 border-amber-400/30">
                    <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-14L4 7m0 10l8 4m0 0l8-4m-8 4V7"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold font-serif text-white mb-2">Préparation et Traitement</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Chaque robe est soigneusement préparée à la main. Le traitement des commandes prend entre <strong>1 et 3 jours ouvrables</strong>, selon la disponibilité et la personnalisation.
                    </p>
                </div>
            </div>

            <!-- Section 2: Modes de Livraison -->
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0 bg-gray-800 rounded-full h-16 w-16 flex items-center justify-center border-2 border-amber-400/30">
                     <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold font-serif text-white mb-2">Modes de Livraison</h2>
                    <ul class="list-disc list-inside text-gray-400 space-y-1">
                        <li>Livraison standard par courrier postal (3-7 jours ouvrables)</li>
                        <li>Retrait en boutique pour les clients locaux</li>
                    </ul>
                </div>
            </div>

            <!-- Section 3: Frais de Livraison -->
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0 bg-gray-800 rounded-full h-16 w-16 flex items-center justify-center border-2 border-amber-400/30">
                    <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 11V9a2 2 0 00-2-2H7a2 2 0 00-2 2v2m10 0V9a2 2 0 00-2-2h-2a2 2 0 00-2 2v2m-3 4h.01M12 16h.01M15 16h.01M12 12h.01M9 12h.01M15 12h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold font-serif text-white mb-2">Frais de Livraison</h2>
                    <ul class="list-disc list-inside text-gray-400 space-y-1">
                        <li><strong>Livraison standard :</strong> frais supplémentaires entre 10 DT et 20 DT.</li>
                        <li><strong>Retrait en boutique :</strong> sans frais.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 4: Expédition Internationale -->
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0 bg-gray-800 rounded-full h-16 w-16 flex items-center justify-center border-2 border-amber-400/30">
                    <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.707 4.293l.293-.293a1 1 0 011.414 0l.293.293m-2 0h2m-2 0v2m2-2v2m0 0l-2 2m2-2l2 2m-2-2l2-2m-2 2l-2-2m6 10v2m-2-2v2m-2-2v2m-2-2v2m-2-2v2m6 0h2m-2 0h-2m-2 0h-2m-2 0h-2m-2 0h-2m6-4l2-2m-2 2l-2-2m-2 2l2 2m2 2l2 2m-2-2l-2 2m-2 2l-2 2"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold font-serif text-white mb-2">Expédition Internationale</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Nous expédions nos robes à l'international. Les délais et frais varient selon la destination. Veuillez noter que les taxes et droits de douane sont à la charge du client.
                    </p>
                </div>
            </div>

            <!-- Section 5: Suivi et Support -->
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0 bg-gray-800 rounded-full h-16 w-16 flex items-center justify-center border-2 border-amber-400/30">
                    <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold font-serif text-white mb-2">Suivi et Support</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Dès l'expédition, vous recevrez un numéro de suivi. Notre service client est disponible pour répondre à toutes vos questions.
                    </p>
                </div>
            </div>

            {{-- Call to Action --}}
            <div class="mt-16 pt-12 border-t border-gray-800 text-center">
                <h3 class="text-2xl font-serif font-semibold text-white">Des questions sur la livraison ?</h3>
                <p class="text-gray-400 mt-2 mb-6">N'hésitez pas à nous contacter pour toute demande d'information.</p>
                <a href="{{ route('contact') }}" class="inline-block bg-amber-400 text-black font-bold py-3 px-8 rounded-full hover:bg-amber-300 transition-colors duration-300 transform hover:scale-105">
                    Contactez-nous
                </a>
            </div>

        </div>
    </div>
</div>
@endsection

