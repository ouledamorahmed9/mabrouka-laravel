<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najla - @yield('title', 'Robes Traditionnelles de Luxe')</title>

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
    
    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    {{-- SwiperJS JS --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- Scroll Animation & Carousel Initialization Script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Scroll Animation Observer
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

            // Hero Slider Initialization
            const heroSwiper = new Swiper('.hero-swiper', {
                loop: true,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // Bestsellers Carousel Initialization
            const bestsellersSwiper = new Swiper('.bestsellers-swiper', {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination-bestsellers',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                }
            });
        });
    </script>
</body>
</html>

