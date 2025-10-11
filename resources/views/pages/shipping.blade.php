@extends('layouts.public')

@section('title', 'Expédition et Livraison')

@section('content')
<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Expédition et Livraison</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">Toutes les informations sur nos méthodes, délais et coûts de livraison.</p>
        </header>

        <div class="max-w-4xl mx-auto bg-gray-900 p-8 md:p-12 rounded-lg border border-gray-700 space-y-8 animated-section">
            <div class="prose prose-invert prose-lg max-w-none">
                <h2 class="text-amber-300 font-serif">Politique d'Expédition</h2>
                
                <h3>Délais de Traitement</h3>
                <p>Toutes les commandes sont traitées dans un délai de 1 à 3 jours ouvrables (hors week-ends et jours fériés) après réception de votre e-mail de confirmation de commande. Vous recevrez une autre notification lorsque votre commande aura été expédiée.</p>

                <h3>Tarifs et Délais de Livraison en Tunisie</h3>
                <p>Nous offrons plusieurs options de livraison sur tout le territoire tunisien. Les frais d'expédition de votre commande seront calculés et affichés au moment du paiement.</p>
                <ul>
                    <li><strong>Livraison Standard (Poste Tunisienne) :</strong> 3-5 jours ouvrables.</li>
                    <li><strong>Livraison Express (Transporteur privé) :</strong> 1-2 jours ouvrables.</li>
                </ul>
                
                <h3>Livraison Internationale</h3>
                <p>Nous proposons également la livraison internationale vers de nombreux pays. Les frais d'expédition et les délais varient en fonction de la destination. Les éventuels frais de douane et taxes d'importation sont à la charge du client.</p>

                <h3>Comment puis-je suivre ma commande ?</h3>
                <p>Une fois votre commande expédiée, vous recevrez un e-mail de notre part qui comprendra un numéro de suivi que vous pourrez utiliser pour vérifier son statut. Veuillez prévoir 48 heures pour que les informations de suivi soient disponibles.</p>
                
                <h3>Retours et Échanges</h3>
                <p>Pour toute information concernant les retours, veuillez consulter notre page de <a href="{{ route('terms') }}" class="text-amber-400 hover:underline">Conditions Générales de Vente</a> ou nous contacter directement.</p>
            </div>
        </div>
    </div>
</div>
@endsection
