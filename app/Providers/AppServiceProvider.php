<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Product;
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
        $subproducts = Product::whereNUll('product_id')->latest()->get();
        View::share([
            'contact'=>$contact,
            'subproducts'=>$subproducts,
        ]);
    }
}
