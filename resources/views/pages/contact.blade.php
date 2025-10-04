@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Prendre Contact</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Pour toute demande ou un rendez-vous, notre équipe est à votre disposition.</p>
        </header>
        <div class="grid md:grid-cols-2 gap-12">
            <div class="animated-section">
                <form class="bg-gray-900 p-8 rounded-lg shadow-2xl space-y-6 border border-gray-700">
                     <h3 class="font-semibold text-2xl mb-4 text-white font-serif">Formulaire de contact</h3>
                     <div>
                        <label for="name" class="block text-sm font-medium text-gray-400">Nom Complet</label>
                        <input type="text" id="name" class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white" />
                    </div>
                     <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Adresse Email</label>
                        <input type="email" id="email" class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white" />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-400">Votre Message</label>
                        <textarea id="message" rows="5" class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white"></textarea>
                    </div>
                     <button type="submit" class="w-full bg-amber-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-amber-300 transition-colors flex items-center justify-center space-x-2 uppercase tracking-wider">
                        <span>Envoyer</span>
                     </button>
                </form>
            </div>
             <div class="animated-section">
                <div class="space-y-8">
                    <div class="flex items-center">
                        <div class="bg-gray-800 border border-gray-700 text-amber-400 p-4 rounded-full mr-4">{{-- MAP ICON --}}</div>
                        <div>
                            <h3 class="font-semibold text-lg font-serif">Notre Showroom</h3>
                            <p class="text-gray-400">Route de la plage, Akouda 4022, Sousse, Tunisie</p>
                        </div>
                    </div>
                     <div class="flex items-center">
                        <div class="bg-gray-800 border border-gray-700 text-amber-400 p-4 rounded-full mr-4">{{-- PHONE ICON --}}</div>
                        <div>
                            <h3 class="font-semibold text-lg font-serif">Téléphone</h3>
                            <p class="text-gray-400">+216 26 834 888</p>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-lg h-80 border-2 border-gray-700">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12900.59892546824!2d10.58334863920786!3d35.89437976822209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130275d75bf3b39b%3A0x2644265d341a273!2sAkouda!5e0!3m2!1sfr!2stn!4v1727781358913!5m2!1sfr!2stn" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
