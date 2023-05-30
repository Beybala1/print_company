<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class AdvertisingController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Reklam');
            })
            ->latest()
            ->paginate(6);
        return view('frontend.advertising',get_defined_vars());
    }
}
