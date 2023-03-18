<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::whereNull('product_id')->latest()->get();
        return view('frontend.product',get_defined_vars());
    }

    /** 
     * Display the specified resource.
     */
    public function show($slug)
    {
        $products = Product::latest()->paginate(6);
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.show.product',get_defined_vars());
    }
}
