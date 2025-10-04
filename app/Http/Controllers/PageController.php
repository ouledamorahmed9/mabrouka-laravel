<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    // Mock data that would typically come from a database
    private function getProductsData()
    {
        return [
          ['id' => 1, 'name' => 'Caftan Zerdā', 'price' => 550, 'imageUrl' => 'https://placehold.co/400x550/b68f40/ffffff?text=Caftan+Zerdā', 'category' => 'caftan', 'color' => 'doré', 'type' => 'femme', 'availability' => 'vente', 'bestseller' => true],
          ['id' => 2, 'name' => 'Outia Kairouanaise', 'price' => 250, 'imageUrl' => 'https://placehold.co/400x550/8B0000/ffffff?text=Outia+Rouge', 'category' => 'outia', 'color' => 'rouge', 'type' => 'femme', 'availability' => 'location', 'bestseller' => true],
          ['id' => 3, 'name' => 'Robe de Soirée Éclat', 'price' => 400, 'imageUrl' => 'https://placehold.co/400x550/000000/ffffff?text=Robe+Soirée', 'category' => 'robe-soiree', 'color' => 'noir', 'type' => 'femme', 'availability' => 'vente', 'bestseller' => true],
          ['id' => 4, 'name' => 'Caftan Homme Prestige', 'price' => 450, 'imageUrl' => 'https://placehold.co/400x550/1a1a1a/ffffff?text=Caftan+Homme', 'category' => 'caftan', 'color' => 'noir', 'type' => 'homme', 'availability' => 'vente', 'bestseller' => true],
          ['id' => 5, 'name' => 'Tenue Enfant Fête', 'price' => 150, 'imageUrl' => 'https://placehold.co/400x550/D2B48C/000000?text=Tenue+Enfant', 'category' => 'jebba', 'color' => 'beige', 'type' => 'enfant', 'availability' => 'location', 'bestseller' => false],
          ['id' => 6, 'name' => 'Bijoux Berbères Authentiques', 'price' => 120, 'imageUrl' => 'https://placehold.co/400x550/C0C0C0/000000?text=Bijoux', 'category' => 'accessoires', 'color' => 'argenté', 'type' => 'accessoire', 'availability' => 'vente', 'bestseller' => false],
          ['id' => 7, 'name' => 'Kesswa Tunisienne', 'price' => 320, 'imageUrl' => 'https://placehold.co/400x550/006400/ffffff?text=Kesswa', 'category' => 'kesswa', 'color' => 'vert', 'type' => 'femme', 'availability' => 'location', 'bestseller' => true],
          ['id' => 8, 'name' => 'Caftan de Mariée Perlé', 'price' => 950, 'imageUrl' => 'https://placehold.co/400x550/F5F5DC/000000?text=Mariée', 'category' => 'caftan', 'color' => 'ivoire', 'type' => 'femme', 'availability' => 'vente', 'bestseller' => true],
        ];
    }

    private function getBlogData()
    {
        return [
            ['id' => 1, 'title' => 'L\'Élégance Intemporelle du Caftan Tunisien', 'date' => '01 Octobre 2025', 'excerpt' => 'Explorez l\'histoire riche et la signification culturelle du caftan...', 'imageUrl' => 'https://placehold.co/600x400/1a1a1a/ffffff?text=Caftan'],
            ['id' => 2, 'title' => 'Comment Accessoiriser Votre Tenue', 'date' => '22 Septembre 2025', 'excerpt' => 'Des bijoux berbères aux ceintures dorées, découvrez nos conseils...', 'imageUrl' => 'https://placehold.co/600x400/b68f40/000000?text=Accessoires'],
            ['id' => 3, 'title' => 'Les Secrets de la Broderie Faite Main', 'date' => '15 Septembre 2025', 'excerpt' => 'Plongez dans l\'univers de nos artisans et découvrez le savoir-faire...', 'imageUrl' => 'https://placehold.co/600x400/333333/ffffff?text=Broderie'],
        ];
    }

    private function getTestimonialsData()
    {
        return [
            ['id' => 1, 'name' => 'Amina B.', 'location' => 'Sousse', 'quote' => 'Une expérience inoubliable ! La robe était magnifique et le service impeccable. J\'ai reçu tellement de compliments.', 'rating' => 5],
            ['id' => 2, 'name' => 'Fatma K.', 'location' => 'Tunis', 'quote' => 'La qualité des tissus et la finesse des broderies sont exceptionnelles. On sent la passion dans chaque pièce.', 'rating' => 5],
            ['id' => 3, 'name' => 'Salma G.', 'location' => 'Paris', 'quote' => 'J\'ai commandé ma robe pour un mariage et la livraison a été rapide et soignée. La robe est encore plus belle en vrai.', 'rating' => 5],
        ];
    }

    public function home(): View
    {
        $allProducts = $this->getProductsData();
        $bestsellers = array_filter($allProducts, fn($p) => $p['bestseller']);

        return view('pages.home', [
            'bestsellers' => $bestsellers,
            'testimonials' => $this->getTestimonialsData(),
            'blogPosts' => $this->getBlogData(),
        ]);
    }

    public function products(): View
    {
        return view('pages.products', [
            'products' => $this->getProductsData()
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function blog(): View
    {
        return view('pages.blog', [
            'blogPosts' => $this->getBlogData()
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}

