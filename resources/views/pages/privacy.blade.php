@extends('layouts.public')

@section('title', 'Politique de Confidentialité')

@section('content')
<div class="bg-black text-white pt-32 md:pt-40 pb-24">
    <div class="container mx-auto px-6">

        <!-- Breadcrumbs -->
        <nav class="text-sm mb-10 text-gray-400 animated-section">
            <a href="{{ route('home') }}" class="hover:text-amber-300 transition-colors">Accueil</a>
            <span class="mx-2">&gt;</span>
            <span class="text-white">Politique de Confidentialité</span>
        </nav>

        <div class="animated-section max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-white text-center mb-12">Politique de Confidentialité</h1>
            
            <div class="prose prose-invert prose-lg max-w-none text-gray-300 space-y-6">
                <p>Dernière mise à jour : 8 octobre 2025</p>

                <h2 class="text-amber-300">1. Collecte de l'information</h2>
                <p>Nous recueillons des informations lorsque vous nous contactez via notre formulaire de contact ou lorsque vous effectuez une transaction. Les informations recueillies incluent votre nom, votre adresse e-mail, votre numéro de téléphone, etc.</p>
                
                <h2 class="text-amber-300">2. Utilisation des informations</h2>
                <p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
                <ul>
                    <li>Personnaliser votre expérience et répondre à vos besoins individuels.</li>
                    <li>Améliorer notre site web.</li>
                    <li>Améliorer le service client et vos besoins de prise en charge.</li>
                    <li>Vous contacter par e-mail ou par téléphone.</li>
                    <li>Administrer une promotion, un concours, ou une enquête.</li>
                </ul>

                <h2 class="text-amber-300">3. Confidentialité du commerce en ligne</h2>
                <p>Nous sommes les seuls propriétaires des informations recueillies sur ce site. Vos informations personnelles ne seront pas vendues, échangées, transférées, ou données à une autre société pour n'importe quelle raison, sans votre consentement, en dehors de ce qui est nécessaire pour répondre à une demande et / ou une transaction, comme par exemple pour expédier une commande.</p>

                <h2 class="text-amber-300">4. Divulgation à des tiers</h2>
                <p>Nous ne vendons, n'échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierces parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.</p>

                <h2 class="text-amber-300">5. Consentement</h2>
                <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
            </div>
        </div>
    </div>
</div>
@endsection
