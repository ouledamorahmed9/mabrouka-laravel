<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- === SEO & SOCIAL SHARING TAGS === --}}
    <title>Mabrouka Fashion - @yield('title', 'Robes Traditionnelles de Luxe')</title>
    <meta name="description" content="@yield('description', 'Location et vente de robes traditionnelles tunisiennes de luxe. Découvrez nos collections uniques pour mariages, soirées et toutes vos occasions spéciales.')">

    <!-- Facebook / Open Graph -->
    <meta property="og:title" content="Mabrouka Fashion - @yield('title', 'Robes Traditionnelles de Luxe')">
    <meta property="og:description" content="@yield('description', 'Location et vente de robes traditionnelles tunisiennes de luxe.')">
    <meta property="og:image" content="@yield('og_image', asset('images/hero-principal.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mabrouka Fashion - @yield('title', 'Robes Traditionnelles de Luxe')">
    <meta name="twitter:description" content="@yield('description', 'Location et vente de robes traditionnelles tunisiennes de luxe.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/hero-principal.jpg'))">
    {{-- === END OF SEO TAGS === --}}

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <script>
      // Custom Tailwind theme to add our fonts
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              'serif': ['Cormorant Garamond', 'serif'],
              'sans': ['Poppins', 'sans-serif'],
            }
          }
        }
      }
    </script>
</head>
<body class="bg-black text-white font-sans">
    
    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    {{-- SwiperJS JS --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- General scroll animation observer for all pages --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const animatedSections = document.querySelectorAll('.animated-section');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            animatedSections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

    {{-- This is the "slot" for page-specific scripts --}}
    @stack('scripts')

</body>
</html>

