<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard with statistics.
     */
    public function index(): View
    {
        $productCount = Product::count();
        $blogPostCount = BlogPost::count();
        $unreadMessages = ContactMessage::where('is_read', false)->count();

        return view('admin.dashboard', compact('productCount', 'blogPostCount', 'unreadMessages'));
    }
}

