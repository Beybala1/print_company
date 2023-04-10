<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug)
    {
        $new = News::where('slug', $slug)->firstOrFail();
        $news = News::latest()->limit(6)->get();
        return view('frontend.show.news',get_defined_vars());
    }
}
