<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }

    public function productAll()
    {
        $products = Product::latest()->paginate(6);
        return view('frontend.product-all',get_defined_vars());
    }

    public function show($slug)
    {
        $products= Product::with('images')->paginate(6);
        $product = Product::with('images')->where('slug', $slug)
            ->firstOrFail();
        return view('frontend.show.product', get_defined_vars());
    }
}
