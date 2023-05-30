<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->get();
        return view('backend.about',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Helper(app/helpers.php)
        publisher_abort();
        return view('backend.create.about_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        try {
            About::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>upload('about', $request->file('image'))
            ]);
            return redirect(route('slider.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
        editor_abort();
        try {
            $about_edit = About::find($id);
            return view('backend.update.about_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        try {
            $request->validated();
            if ($request->hasFile('image')) {
                $file = time().'.'.$request->image->extension();
                $request->image->storeAS('public/uploads/images/',$file);
                $image = 'storage/uploads/images/'.$file;
                File::delete($about->image);
            }
            else{
                $image = $about->image;
            }
            $about->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image,
            ]);
           
            return redirect(route('about.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        destroyer_abort();
        try {
            $about = About::find($id);
            File::delete($about->image);
            $about->delete();
            return redirect(route('about.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
