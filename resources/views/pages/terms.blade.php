@extends('layouts.public')

@section('title', 'Termes & Conditions')

@section('content')
<div class="bg-black text-white pt-32 md:pt-40 pb-24">
    <div class="container mx-auto px-6">

        <!-- Breadcrumbs -->
        <nav class="text-sm mb-10 text-gray-400 animated-section">
            <a href="{{ route('home') }}" class="hover:text-amber-300 transition-colors">Accueil</a>
            <span class="mx-2">&gt;</span>
            <span class="text-white">Termes & Conditions</span>
        </nav>

        <div class="animated-section max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-white text-center mb-12">Termes & Conditions</h1>
            
            <div class="prose prose-invert prose-lg max-w-none text-gray-300 space-y-6">
                <p>Dernière mise à jour : 8 octobre 2025</p>

                <h2 class="text-amber-300">1. Introduction</h2>
                <p>Bienvenue sur Mabrouka Fashion. Ces termes et conditions décrivent les règles et règlements pour l'utilisation du site web de Mabrouka Fashion, situé à [Votre URL de site web]. En accédant à ce site web, nous supposons que vous acceptez ces termes et conditions. Ne continuez pas à utiliser Mabrouka Fashion si vous n'acceptez pas de prendre tous les termes et conditions énoncés sur cette page.</p>
                
                <h2 class="text-amber-300">2. Propriété Intellectuelle</h2>
                <p>Sauf indication contraire, Mabrouka Fashion et/ou ses concédants de licence détiennent les droits de propriété intellectuelle pour tout le matériel sur Mabrouka Fashion. Tous les droits de propriété intellectuelle sont réservés. Vous pouvez y accéder depuis Mabrouka Fashion pour votre usage personnel, sous réserve des restrictions définies dans ces termes et conditions.</p>
                <ul>
                    <li>Vous ne devez pas republier le matériel de Mabrouka Fashion.</li>
                    <li>Vous ne devez pas vendre, louer ou sous-licencier le matériel de Mabrouka Fashion.</li>
                    <li>Vous ne devez pas reproduire, dupliquer ou copier le matériel de Mabrouka Fashion.</li>
                </ul>

                <h2 class="text-amber-300">3. Location et Vente de Produits</h2>
                <p>Nos services incluent la location et la vente de robes traditionnelles. En effectuant une transaction, vous acceptez nos politiques de paiement, de livraison, de retour et d'annulation, qui vous seront communiquées au moment de la transaction.</p>
                <p>Tous les articles loués doivent être retournés dans l'état où ils ont été reçus. Des frais pour dommages ou retard peuvent s'appliquer.</p>

                <h2 class="text-amber-300">4. Limitation de responsabilité</h2>
                <p>En aucun cas Mabrouka Fashion, ni aucun de ses dirigeants, administrateurs et employés, ne sera tenu responsable de quoi que ce soit découlant de ou lié de quelque manière que ce soit à votre utilisation de ce site web, que cette responsabilité soit contractuelle. Mabrouka Fashion, y compris ses dirigeants, administrateurs et employés, ne sera pas tenu responsable de toute responsabilité indirecte, consécutive ou spéciale découlant de ou liée de quelque manière que ce soit à votre utilisation de ce site web.</p>

                <h2 class="text-amber-300">5. Droit Applicable et Juridiction</h2>
                <p>Ces Termes seront régis et interprétés conformément aux lois de la Tunisie, et vous vous soumettez à la juridiction non exclusive des tribunaux d'État et fédéraux situés en Tunisie pour la résolution de tout litige.</p>
            </div>
        </div>
    </div>
</div>
@endsection
