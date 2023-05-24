<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderAdminController extends Controller
{
    public function index()
    {   
        $sliders = Slider::latest()->get();
        return view('backend.slider',get_defined_vars());
    }
   
    public function create()
    {
        publisher_abort();
        return view('backend.create.slider_create');
    }

    public function store(StoreSliderRequest $request)
    {
        try {
            Slider::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>upload('sliders', $request->file('image'))
            ]);
            return redirect(route('slider.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    public function show(string $id)
    {
        //
    }

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

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        try {
            if ($request->hasFile('image')) {
                $imagePath = public_path($slider->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $slider->image = upload('sliders', $request->file('image'));
            }
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->save();
            return redirect(route('slider.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

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
