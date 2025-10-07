<?php

namespace App\Providers;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using a view composer to share the unread messages count with the admin layout
        View::composer('layouts.admin', function ($view) {
            if (Auth::check()) {
                $unreadMessages = ContactMessage::where('is_read', false)->count();
                $view->with('unreadMessages', $unreadMessages);
            } else {
                $view->with('unreadMessages', 0);
            }
        });
    }
}

