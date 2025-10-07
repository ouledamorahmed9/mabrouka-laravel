@extends('layouts.public')


@section('title', 'Notre Maison')

@section('content')

<div class="bg-black text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
            <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Notre Maison</h1>
            <p class="mt-4 text-gray-400 max-w-3xl mx-auto">L'art de la haute couture traditionnelle, une passion familiale.</p>
        </header>
        
        {{-- === DÉBUT DE LA MODIFICATION === --}}
        <div class="grid md:grid-cols-2 gap-16 items-center">
           
           <div class="animated-section flex items-center justify-center p-8">
                <img src="{{ asset('images/logo.png') }}" alt="Mabrouka Fashion Logo" class="max-h-80 w-auto" />
           </div>

           <div class="animated-section">
                <div class="space-y-6 text-gray-300">
                     <p class="text-lg leading-relaxed">
                        Née d'une passion pour le patrimoine tunisien, la maison MABROUKA FASHION est une ode à la féminité et à l'élégance. Chaque création est le reflet d'un savoir-faire artisanal transmis de génération en génération.
                    </p>
                    <p class="leading-relaxed">
                        Nous sélectionnons les matières les plus nobles et travaillons avec des artisans d'exception pour donner vie à des pièces uniques. Nos collections sont une invitation au voyage, une célébration de la richesse de notre culture.
                    </p>
                    <p class="leading-relaxed">
                        Plus qu'une boutique, MABROUKA FASHION est une expérience. Nous vous accueillons dans notre univers pour vous offrir un service personnalisé et vous aider à trouver la tenue qui sublimera vos plus beaux moments.
                    </p>
                </div>
           </div>
        </div>
        {{-- === FIN DE LA MODIFICATION === --}}
    </div>
</div>

@endsection