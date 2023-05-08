<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\News;
use App\Models\Project;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $services = Service::latest()->get();
        $projects = Project::latest()->paginate(6);
        $products_page = Product::with('images')->latest()
            ->paginate(6);
        foreach ($products_page as $product) {
            $product->images = $product->images->first();
        } 
        $faqs = Faq::latest()->get();
        $news = News::latest()->paginate(6);
        $about = About::first();
        return view('frontend.home',get_defined_vars());
    }
}
