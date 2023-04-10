<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $contact = Contact::first();
        $socials = Social::get();
        $categories = Category::with('products')->get();
        View::share([
            'categories' => $categories,
            'socials'=>$socials,
            'contact'=>$contact,
        ]);
    }
}
