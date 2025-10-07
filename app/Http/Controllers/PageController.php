<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Product;
use App\Models\Slider; // <-- ADD THIS LINE

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    private function getTestimonialsData()
    {
        // This data can remain static for now, or you can create a table for it later.
        return [
            ['id' => 1, 'name' => 'Najla ettounsia
', 'location' => 'Artiste', 'quote' => 'Grâce à cette équipe, trouver la robe traditionnelle que j’aime a été une expérience fluide et agréable. Leur expertise des modèles et leur attention à mes besoins ont largement dépassé mes attentes.', 'rating' => 5],
            ['id' => 2, 'name' => 'Fatma K.', 'location' => 'Tunis', 'quote' => 'La qualité des tissus et la finesse des broderies sont exceptionnelles. On sent la passion dans chaque pièce.', 'rating' => 5],
            ['id' => 3, 'name' => 'Salma G.', 'location' => 'Paris', 'quote' => 'J\'ai commandé ma robe pour un mariage et la livraison a été rapide et soignée. La robe est encore plus belle en vrai.', 'rating' => 5],
        ];
    }

    public function home(): View
    {
        return view('pages.home', [
            'sliders' => Slider::where('is_active', true)->get(), // <-- ADD THIS LINE
            'bestsellers' => Product::where('bestseller', true)->take(8)->get(),
            'testimonials' => $this->getTestimonialsData(),
            'blogPosts' => BlogPost::latest('date')->take(3)->get(),
        ]);
    }

    public function products(Request $request): View
    {
        $productsQuery = Product::query();

        if ($request->filled('category') && $request->category !== 'tous') {
            $productsQuery->where('category', $request->category);
        }
        if ($request->filled('color') && $request->color !== 'tous') {
            $productsQuery->where('color', $request->color);
        }
        if ($request->filled('type') && $request->type !== 'tous') {
            $productsQuery->where('type', $request->type);
        }
        if ($request->filled('availability')) {
            if ($request->availability === 'location') {
                $productsQuery->where('for_rent', true);
            }
            if ($request->availability === 'vente') {
                $productsQuery->where('for_sale', true);
            }
        }

        return view('pages.products', [
            'products' => $productsQuery->latest()->paginate(12),
            'categories' => Product::pluck('category')->unique()->sort(),
            'colors' => Product::pluck('color')->unique()->sort(),
            'types' => Product::pluck('type')->unique()->sort(),
        ]);
    }

    public function productDetail(string $slug): View
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $similarProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('pages.product-detail', [
            'product' => $product,
            'similarProducts' => $similarProducts,
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function blog(): View
    {
        return view('pages.blog', [
            'blogPosts' => BlogPost::latest('date')->paginate(9)
        ]);
    }
    
    public function blogDetail(string $slug): View
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();

        return view('pages.blog-detail', [
            'post' => $post
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}

