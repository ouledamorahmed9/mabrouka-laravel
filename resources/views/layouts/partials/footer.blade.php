<footer class="bg-gray-900 text-gray-300 border-t border-gray-800">
    <div class="container mx-auto px-6 py-16">
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

        {{-- ... (Le reste du footer reste inchangé) ... --}}
        <div>
          <h4 class="font-semibold mb-4 uppercase tracking-wider text-white">Navigation</h4>
          <ul class="space-y-3 text-sm">
            <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Accueil</a></li>
            <li><a href="{{ route('products') }}" class="hover:text-amber-400 transition-colors">Nos Robes</a></li>
            <li><a href="{{ route('blog') }}" class="hover:text-amber-400 transition-colors">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-amber-400 transition-colors">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4 uppercase tracking-wider text-white">Légal</h4>
          <ul class="space-y-3 text-sm">
            <li><a href="#" class="hover:text-amber-400 transition-colors">Termes & Conditions</a></li>
            <li><a href="#" class="hover:text-amber-400 transition-colors">Politique de confidentialité</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4 uppercase tracking-wider text-white">Suivez-nous</h4>
          <div class="flex space-x-4">
            <a href="https://www.instagram.com/mabroukafashion/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-label="Instagram"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" /></svg>
            </a>
            <a href="https://www.facebook.com/mabroukafashion" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-transform hover:scale-110">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-label="Facebook"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" /></svg>
            </a>
          </div>
        </div>
      </div>
      
      <div class="mt-16 border-t border-gray-800 pt-8 text-center text-sm text-gray-500">
        <p>&copy; {{ date('Y') }} Mabrouka Fashion. Tous droits réservés. Créé avec passion.</p>
      </div>
    </div>
</footer>