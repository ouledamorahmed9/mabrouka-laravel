<footer class="bg-black text-white pt-16 pb-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- À Propos -->
            <div class="md:col-span-2 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Mabrouka Fashion Logo" class="h-14 md:h-16 w-auto">
                    <div>
                        <span class="block text-xl md:text-2xl font-bold font-serif text-white tracking-wider leading-tight">MABROUKA</span>
                        <span class="block text-xs md:text-sm font-serif text-amber-400 tracking-widest leading-tight">FASHION</span>
                    </div>
                </a>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Spécialisée dans la location et la vente de robes traditionnelles tunisiennes, Mabrouka Fashion vous accompagne pour chaque événement avec style et authenticité. Que ce soit pour une soirée, un mariage ou une fête familiale, trouvez la tenue parfaite et profitez de notre service personnalisé, en boutique ou à distance.
                </p>
            </div>

            <!-- Liens Rapides -->
            <div class="md:ml-16">
                <h4 class="font-semibold text-white uppercase tracking-wider mb-4">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Accueil</a></li>
                    <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Nos Robes</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-amber-400 transition-colors">À Propos</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Journal</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Aide & Informations -->
            <div>
                <h4 class="font-semibold text-white uppercase tracking-wider mb-4">Aide & Informations</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('shipping') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Expédition et livraison</a></li>
                    <li><a href="{{ route('faq') }}" class="text-gray-400 hover:text-amber-400 transition-colors">FAQs</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Conditions de vente</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:text-amber-400 transition-colors">Politique de confidentialité</a></li>
                </ul>
            </div>

            <!-- Suivez-nous et Assistance -->
            <div>
                <h4 class="font-semibold text-white uppercase tracking-wider mb-4">Suivez-nous</h4>
                <div class="flex space-x-5">
                    
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/mabroukafashion" target="_blank" class="text-gray-400 hover:text-amber-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                    
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/mabroukafashion/" target="_blank" class="text-gray-400 hover:text-amber-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.44-1.441-1.44z"/></svg>
                    </a>

                    {{-- TikTok --}}
                    <a href="https://www.tiktok.com/@mabrouka_fashion" target="_blank" class="text-gray-400 hover:text-amber-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-2.43.05-4.84-.94-6.46-2.97-1.62-2.02-2.06-4.87-1.21-7.22.86-2.35 3.14-3.94 5.53-4.13.43-.03.86-.05 1.29-.07.03-1.29.02-2.58.01-3.87.01-1.51.32-3.02 1.09-4.39.95-1.7 2.68-2.78 4.6-2.91.13-.01.26-.01.39-.01z"/></svg>
                    </a>
                    
                    {{-- WhatsApp --}}
                    <a href="https://wa.me/21629713903" target="_blank" class="text-gray-400 hover:text-amber-400 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.35 3.45 16.86L2.05 22L7.31 20.52C8.75 21.32 10.36 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM12.04 20.13C10.56 20.13 9.11 19.68 7.85 18.83L7.4 18.57L4.5 19.33L5.28 16.51L5.03 16.07C4.11 14.73 3.65 13.21 3.65 11.91C3.65 7.33 7.41 3.54 12.04 3.54C16.67 3.54 20.43 7.33 20.43 11.91C20.43 16.5 16.67 20.13 12.04 20.13ZM17.36 14.28C17.13 14.16 15.81 13.53 15.58 13.44C15.36 13.35 15.2 13.3 15.04 13.58C14.88 13.86 14.34 14.5 14.18 14.67C14.01 14.83 13.85 14.86 13.62 14.75C13.4 14.63 12.56 14.35 11.57 13.49C10.82 12.86 10.3 12.1 10.13 11.82C9.97 11.54 10.09 11.41 10.21 11.29C10.31 11.19 10.45 11.03 10.59 10.87C10.72 10.71 10.76 10.6 10.84 10.43C10.92 10.27 10.88 10.13 10.82 10C10.76 9.87 10.26 8.61 10.03 8.08C9.8 7.55 9.57 7.63 9.42 7.62H9.01C8.85 7.62 8.6 7.68 8.4 7.95C8.2 8.23 7.66 8.8 7.66 10.14C7.66 11.48 8.43 12.75 8.55 12.91C8.68 13.08 10.26 15.5 12.7 16.48C13.28 16.73 13.73 16.86 14.09 16.97C14.7 17.13 15.24 17.09 15.68 16.85C16.18 16.58 16.9 15.93 17.13 15.34C17.36 14.75 17.36 14.28 17.36 14.28Z"/></svg>
                    </a>
                </div>

                <!-- NOUVEAU: Section Assistance Téléphonique -->
                <div class="mt-8 pt-6 border-t border-gray-800">
                    <p class="text-gray-400 text-sm mb-2">Besoin d’assistance ? Appelez-nous.</p>
                    <a href="tel:+21629713903" 
                       class="inline-flex items-center justify-center gap-2 text-lg font-semibold text-white hover:text-amber-300 transition-colors duration-300 group">
                        
                        <!-- Icône de téléphone -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:scale-110 transition-transform">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        
                        <span>+216 29 713 903</span>
                    </a>
                </div>
                <!-- FIN NOUVEAU -->
            </div>
            
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} Mabrouka Fashion. Tous droits réservés.</p>
        </div>
    </div>
</footer>
