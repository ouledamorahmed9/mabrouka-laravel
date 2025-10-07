@extends('layouts.public')

@section('title', 'Contact')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Prendre Contact</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Pour toute demande ou un rendez-vous, notre équipe est à votre disposition.</p>
        </header>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8 max-w-4xl mx-auto" role="alert">
                <strong class="font-bold">Succès !</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            <!-- ====== Formulaire de contact ====== -->
            <div class="animated-section">
                <form action="{{ route('contact.store') }}" method="POST" class="bg-gray-900 p-8 rounded-lg shadow-2xl space-y-6 border border-gray-700">
                    @csrf
                     <h3 class="font-semibold text-2xl mb-4 text-white font-serif">Formulaire de contact</h3>
                     <div>
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-1">Nom Complet</label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white transition-colors" />
                    </div>
                     <div>
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Adresse Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white transition-colors" />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-400 mb-1">Votre Message</label>
                        <textarea name="message" id="message" rows="5" required class="mt-1 block w-full p-3 bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:ring-amber-500 focus:border-amber-500 text-white transition-colors"></textarea>
                    </div>
                     <button type="submit" class="w-full bg-amber-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-amber-300 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 uppercase tracking-wider">
                        <span>Envoyer</span>
                     </button>
                </form>
            </div>

            <!-- ====== Informations de contact (RESTORED) ====== -->
            <div class="animated-section space-y-8">
                <div class="space-y-6 bg-gray-900 p-8 rounded-lg border border-gray-700">
                    <div>
                        <h3 class="font-semibold text-xl font-serif text-amber-300">Téléphone & Email</h3>
                        <p class="text-gray-300 mt-2">+216 29 713 903</p>
                        <p class="text-gray-300">contact@mabroukafashion.com</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl font-serif text-amber-300">Adresse</h3>
                        <p class="text-gray-300 mt-2">Cité les jardins, Sidi Bouzid, Tunisia</p>
                    </div>
                </div>

                <div class="rounded-lg overflow-hidden shadow-lg h-80 border-2 border-gray-700">
                    {{-- === UPDATED GOOGLE MAPS IFRAME === --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.328325952704!2d9.45630577576562!3d35.0316762728286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fec33d7f363b9d%3A0xff97797030f8184b!2sCentre%20Mabrouka%20Fashion!5e0!3m2!1sfr!2stn!4v1716911291888!5m2!1sfr!2stn" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

