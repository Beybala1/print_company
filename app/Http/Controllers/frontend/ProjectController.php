<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('frontend.project',get_defined_vars());
    }

    public function show($slug)
    {
        $projects = Project::latest()->paginate(6);
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('frontend.show.project',get_defined_vars());
    }
}
