<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.product');
    }

    public function show($slug)
    {
        $products_page = Product::with('images')->latest()
            ->paginate(6);
        foreach ($products_page as $image) {
            $image->images = $image->images->first();
        } 
        $product = Product::with('images')->where('slug', $slug)
            ->firstOrFail();
        return view('frontend.show.product', get_defined_vars());
    }

}
