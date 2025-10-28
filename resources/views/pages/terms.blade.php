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
            
            <div class="prose prose-invert prose-lg max-w-none text-gray-300 space-y-8">
                <p class="text-center text-gray-400">Dernière mise à jour : 11 Octobre 2025</p>

                <div class="p-6 bg-gray-900 border-l-4 border-amber-300 rounded-r-lg">
                    <p class="text-lg text-gray-200">
                        Votre vie privée est notre priorité. Cette politique de confidentialité explique quelles données nous collectons, pourquoi nous les collectons, et comment nous les protégeons.
                    </p>
                </div>

                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">1. Notre engagement envers la confidentialité</h2>
                <p>
                    Mabrouka Fashion s'engage à protéger la vie privée de ses clients et visiteurs. Nous respectons le Règlement Général sur la Protection des Données (RGPD) et nous nous efforçons d'être totalement transparents sur la manière dont nous traitons vos données.
                </p>

                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">2. Les informations que nous collectons</h2>
                <p>
                    Nous pouvons collecter plusieurs types d'informations vous concernant :
                </p>
                <ul>
                    <li><strong>Informations d'identification personnelle :</strong> Nom, prénom, adresse postale, adresse e-mail, numéro de téléphone.</li>
                    <li><strong>Informations de transaction :</strong> Détails des produits achetés ou loués, informations de paiement et de facturation.</li>
                    <li><strong>Données de connexion et de navigation :</strong> Adresse IP, type de navigateur, pages visitées, temps passé sur le site (via des cookies).</li>
                    <li><strong>Communications :</strong> Toute information que vous nous fournissez lorsque vous contactez notre service client.</li>
                </ul>

                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">3. Comment nous utilisons vos informations</h2>
                <p>
                    Les données que nous collectons sont utilisées pour les finalités suivantes :
                </p>
                <ul>
                    <li><strong>Fournir nos services :</strong> Traiter vos commandes, gérer les locations, la facturation et l'expédition.</li>
                    <li><strong>Améliorer votre expérience :</strong> Personnaliser le contenu du site et nos offres pour mieux répondre à vos besoins.</li>
                    <li><strong>Communication :</strong> Vous envoyer des informations sur votre commande, répondre à vos questions et, si vous y consentez, vous envoyer des newsletters et des offres promotionnelles.</li>
                    <li><strong>Sécurité :</strong> Prévenir la fraude et protéger la sécurité de notre site web.</li>
                </ul>
                
                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">4. Partage de vos informations</h2>
                <p>
                    Mabrouka Fashion ne vend, ne loue et ne cède jamais vos données personnelles à des tiers à des fins de marketing. Nous pouvons cependant partager vos informations avec des prestataires de services de confiance qui nous aident à exploiter notre site et à fournir nos services (par exemple, les transporteurs pour la livraison, les plateformes de paiement sécurisé). Ces partenaires sont tenus de respecter la confidentialité de vos données.
                </p>
                
                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">5. Sécurité de vos données</h2>
                <p>
                    Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles robustes pour protéger vos données contre tout accès, modification, divulgation ou destruction non autorisés. Les transactions financières sont cryptées à l'aide de la technologie SSL.
                </p>

                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">6. Utilisation des Cookies</h2>
                <p>
                    Notre site utilise des cookies pour assurer son bon fonctionnement et améliorer votre expérience. Un cookie est un petit fichier texte stocké sur votre appareil. Vous pouvez configurer votre navigateur pour refuser les cookies, mais cela pourrait affecter certaines fonctionnalités du site.
                </p>

                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">7. Vos droits concernant vos données</h2>
                <p>
                    Conformément au RGPD, vous disposez des droits suivants :
                </p>
                <ul>
                    <li><strong>Droit d'accès :</strong> Demander une copie des informations que nous détenons sur vous.</li>
                    <li><strong>Droit de rectification :</strong> Demander la correction des données inexactes ou incomplètes.</li>
                    <li><strong>Droit à l'oubli :</strong> Demander la suppression de vos données personnelles.</li>
                    <li><strong>Droit à la portabilité :</strong> Recevoir vos données dans un format structuré et lisible.</li>
                    <li><strong>Droit d'opposition :</strong> Vous opposer au traitement de vos données à des fins de marketing direct.</li>
                </ul>
                <p class="!mt-4">Pour exercer ces droits, veuillez nous contacter à l'adresse indiquée ci-dessous.</p>
                
                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">8. Modifications de cette politique</h2>
                <p>
                    Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera publiée sur cette page avec la date de mise à jour. Nous vous encourageons à la consulter régulièrement.
                </p>
                
                <h2 class="text-amber-300 !mt-12 !mb-4 text-2xl font-semibold border-b border-gray-700 pb-2">9. Nous contacter</h2>
                <p>
                    Pour toute question relative à cette politique de confidentialité ou pour exercer vos droits, vous pouvez nous contacter :
                </p>
                <ul class="!list-none">
                    <li><strong>Par e-mail :</strong> <a href="mailto:contact@mabrouka-fashion.com" class="text-amber-300 hover:text-amber-400">contact@mabrouka-fashion.com</a></li>
                    <li><strong>Par courrier :</strong> Mabrouka Fashion, [Votre Adresse Complète, Ville, Code Postal], Tunisie</li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
