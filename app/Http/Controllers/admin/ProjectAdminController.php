<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('backend.project',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.project_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        try {
            $file = time().'.'.$request->image->extension();
            $request->image->storeAS('public/uploads/images/',$file);
            $image = 'storage/uploads/images/'.$file;
          
            Project::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image,
            ]);
            
            return redirect(route('project.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $project_edit = Project::find($id);
            return view('backend.update.project_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        try {
            $request->validated();
            if ($request->hasFile('image')) {
                $file = time().'.'.$request->image->extension();
                $request->image->storeAS('public/uploads/images/',$file);
                $image = 'storage/uploads/images/'.$file;
                File::delete($project->image);
            }
            else{
                $image = $project->image;
            }
            $project->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image,
            ]);
           
            return redirect(route('project.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $project = Project::find($id);
            File::delete($project->image);
            $project->delete();
            return redirect(route('project.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
