<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryAdminController extends Controller
{
    public function index()
    {   
        $categories = Category::latest()->get();
        return view('backend.category',get_defined_vars());
    }
 
    public function create()
    {
        publisher_abort();
        return view('backend.create.category_create');
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            $request->validated();
            Category::create([
                'title'=>$request->title,
            ]);
            return redirect(route('category.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    public function edit(string $id)
    {
        editor_abort();
        try {
            $category_edit = Category::find($id);
            return view('backend.update.category_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $request->validated();
            $category->update([
                'title'=>$request->title,
            ]);
            return redirect(route('category.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    public function destroy(string $id)
    {
        destroyer_abort();
        try {
            Category::findOrFail($id)->delete();
            return redirect(route('category.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
