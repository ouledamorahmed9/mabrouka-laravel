<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-6 py-12">
            <!-- About Section -->
             
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
        
        <div class="md:col-span-2 lg:col-span-1">
          
          <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
              {{-- MODIFICATION : Taille du logo ajustée --}}
              <img src="{{ asset('images/logo.png') }}" alt="Mabrouka Fashion Logo" class="h-14 md:h-16 w-auto">
              <div>
                  {{-- MODIFICATION : Taille du texte ajustée --}}
                  <span class="block text-xl md:text-2xl font-bold font-serif text-white tracking-wider leading-tight">MABROUKA</span>
                  <span class="block text-xs md:text-sm font-serif text-amber-400 tracking-widest leading-tight">FASHION</span>
              </div>
          </a>
          
          <p class="text-sm text-gray-400 leading-relaxed">
              Spécialisée dans la location et la vente de robes traditionnelles tunisiennes, Mabrouka Fashion vous accompagne pour chaque événement avec style et authenticité. Que ce soit pour une soirée, un mariage ou une fête familiale, trouvez la tenue parfaite et profitez de notre service personnalisé, en boutique ou à distance.
          </p>
        </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                    <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-white transition-colors">Nos Robes</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">À Propos</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Legal Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Légal</h3>
                <ul class="space-y-2">
                    {{-- === FIX APPLIED HERE === --}}
                    <li><a href="{{ route('terms') }}" class="text-gray-400 hover:text-white transition-colors">Termes & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:text-white transition-colors">Politique de confidentialité</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" /></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-800 pt-6 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} Mabrouka Fashion. Tous droits réservés.</p>
        </div>
    </div>
</footer>

