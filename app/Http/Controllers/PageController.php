<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\Collaboration;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('is_active', true)->get();
        $bestsellers = Product::where('bestseller', true)->where('is_active', true)->latest()->take(8)->get();
        $newArrivals = Product::where('new_collection', true)->where('is_active', true)->latest()->take(8)->get();
        $blogPosts = BlogPost::where('is_active', true)->latest()->take(3)->get();
        $collaborations = Collaboration::where('is_active', true)->get();
        $testimonials = [
            [
                'name' => 'Fatma K.',
                'location' => 'Tunis, Tunisie',
                'quote' => 'Une collection magnifique et un service client exceptionnel. J\'ai trouvé la robe parfaite pour mon mariage et je n\'aurais pas pu être plus heureuse. Merci Mabrouka Fashion!',
                'rating' => 5
            ],
            [
                'name' => 'Aisha B.',
                'location' => 'Sfax, Tunisie',
                'quote' => 'Les robes sont encore plus belles en personne. La qualité des tissus et le soin apporté aux détails sont incroyables. Je recommande vivement!',
                'rating' => 5
            ],
            [
                'name' => 'Mariem S.',
                'location' => 'Sousse, Tunisie',
                'quote' => 'J\'ai loué une robe pour une soirée et j\'ai reçu tellement de compliments. Le processus de location était simple et le personnel très serviable.',
                'rating' => 5
            ]
        ];
        return view('pages.home', compact('sliders', 'bestsellers', 'newArrivals', 'blogPosts', 'collaborations', 'testimonials'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function products(Request $request)
    {
        $query = Product::query()->where('is_active', true);

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('color')) {
            $query->where('color', $request->color);
        }
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('availability')) {
            if ($request->availability === 'sale') {
                $query->where('for_sale', true);
            } elseif ($request->availability === 'rent') {
                $query->where('for_rent', true);
            }
        }
        if ($request->input('bestseller') === '1') {
            $query->where('bestseller', true);
        }
        if ($request->input('new_collection') === '1') {
            $query->where('new_collection', true);
        }

        $products = $query->latest()->paginate(12);
        
        if ($request->ajax()) {
            return view('pages.partials._products_grid', compact('products'))->render();
        }

        $categories = Product::where('is_active', true)->whereNotNull('category')->distinct()->pluck('category');
        $colors = Product::where('is_active', true)->whereNotNull('color')->distinct()->pluck('color');
        $types = Product::where('is_active', true)->whereNotNull('type')->distinct()->pluck('type');

        return view('pages.products', compact('products', 'categories', 'colors', 'types'));
    }
    
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $similarProducts = Product::where('category', $product->category)->where('id', '!=', $product->id)->where('is_active', true)->limit(4)->get();
        return view('pages.product-detail', compact('product', 'similarProducts'));
    }

    public function blog()
    {
        $blogPosts = BlogPost::where('is_active', true)->latest()->paginate(9);
        return view('pages.blog', compact('blogPosts'));
    }

    public function blogDetail($slug)
    {
        $post = BlogPost::where('slug', 'like', $slug)->firstOrFail();
        $latestPosts = BlogPost::where('id', '!=', $post->id)->where('is_active', true)->latest()->take(3)->get();
        return view('pages.blog-detail', compact('post', 'latestPosts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function terms()
    {
        return view('pages.terms');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}

