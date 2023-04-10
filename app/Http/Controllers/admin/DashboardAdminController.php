<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $project = Project::count();
        $product = Product::count();
        $news = News::count();
        $user = User::count();
        return view('backend.statistic',get_defined_vars());
    }
}
