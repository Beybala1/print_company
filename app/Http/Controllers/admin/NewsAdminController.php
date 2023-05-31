<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\File;

class NewsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('backend.news',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        publisher_abort();
        return view('backend.create.news_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        try {
            News::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>upload('news', $request->file('image'))
            ]);
            return redirect(route('news.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        editor_abort();
        try {
            return view('backend.update.news_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        try {
            if ($request->hasFile('image')) {
                $imagePath = public_path($news->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $news->image = upload('newss', $request->file('image'));
            }
            $news->title = $request->title;
            $news->description = $request->description;
            $news->save();
           
            return redirect(route('news.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        destroyer_abort();
        try {
            $news = news::find($news);
            File::delete($news->image);
            $news->delete();
            return redirect(route('news.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }
}
