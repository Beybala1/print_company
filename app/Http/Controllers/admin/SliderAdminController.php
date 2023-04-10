<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $sliders = Slider::latest()->get();
        return view('backend.slider',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        publisher_abort();
        return view('backend.create.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        try {
            $request->validated();
            $file = time().'.'.$request->image->extension();
            $request->image->storeAS('public/uploads/images/',$file);
            $image = 'storage/uploads/images/'.$file;
            Slider::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image,
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
            $slider_edit = Slider::find($id);
            return view('backend.update.slider_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        try {
            $request->validated();
            if ($request->hasFile('image')) {
                $file = time().'.'.$request->image->extension();
                $request->image->storeAS('public/uploads/images/',$file);
                $image = 'storage/uploads/images/'.$file;
                File::delete($slider->image);
            }
            else{
                $image = $slider->image;
            }
            $slider->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$image,
            ]);
           
            return redirect(route('slider.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
            $slider = Slider::find($id);
            File::delete($slider->image);
            $slider->delete();
            return redirect(route('slider.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
