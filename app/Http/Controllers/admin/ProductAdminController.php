<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $products = Product::with('category','images')
            ->latest()
            ->get();

        foreach ($products as $product) {
            $product->images = $product->images->first();
        } 
            
        return view('backend.product', get_defined_vars());
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('backend.create.product_create', get_defined_vars());
    }

    public function store(StoreProductRequest $request)
    {
        try {   
            $product = Product::create([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description_1' => $request->description_1,
                'description_2' => $request->description_2,
                'description_3' => $request->description_3,
                'description_4' => $request->description_4,
                'description_5' => $request->description_5,
            ]);
            foreach (multi_upload('products', $request->file('images')) as $image) {
                $productPhotos = new Image();
                $productPhotos->images = $image;
                $product->images()->save($productPhotos);
            }
            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $product_edit = Product::findOrFail($id);
            return view('backend.update.product_update', get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            if ($request->hasFile('images')) {
                foreach ($product->images as $img) {
                    unlink(public_path('images/' . $img->images));
                }
                $product->images()->delete();
                foreach (multi_upload('products', $request->file('images')) as $image) {
                    $productPhoto = new Image();
                    $productPhoto->images = $image;
                    $product->images()->save($productPhoto);
                }
            }
            $product->update([  
                'title' => $request->title,
                'description_1' => $request->description_1,
                'description_2' => $request->description_2,
                'description_3' => $request->description_3,
                'description_4' => $request->description_4,
                'description_5' => $request->description_5,
            ]);

            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            foreach ($product->images as $image) {
                unlink(public_path('images/' . $image->images));
            }
            $product->delete();
            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }

    }
}
