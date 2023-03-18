<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::whereNull('product_id')->latest()->get();
        return view('backend.product',get_defined_vars());
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.product_create');
    }

    public function createSubProduct($id)
    {
        return view('backend.create.product_create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $file = time().'.'.$request->image->extension();
            $request->image->storeAS('public/uploads/images/',$file);
            $image = 'storage/uploads/images/'.$file;
          
            Product::create([
                'title'=>$request->title,
                'product_id'=>$request->product_id,
                'description_1'=>$request->description_1,
                'description_2'=>$request->description_2,
                'description_3'=>$request->description_3,
                'description_4'=>$request->description_4,
                'description_5'=>$request->description_5,
                'image'=>$image,
            ]);
            
            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $products = Product::where('product_id', $id)->latest()->get();
            /* $products = SubProduct::where('product_id', $id)->latest()->get(); */
            return view('backend.alt.product',get_defined_vars());
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
            return view('backend.update.product_update',get_defined_vars());
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
            $request->validated();
            if ($request->hasFile('image')) {
                $file = time().'.'.$request->image->extension();
                $request->image->storeAS('public/uploads/images/',$file);
                $image = 'storage/uploads/images/'.$file;
                File::delete($product->image);
            }
            else{
                $image = $product->image;
            }
            $product->update([
                'title'=>$request->title,
                'description_1'=>$request->description_1,
                'description_2'=>$request->description_2,
                'description_3'=>$request->description_3,
                'description_4'=>$request->description_4,
                'description_5'=>$request->description_5,
                'image'=>$image,
            ]);
           
            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
            $product = Product::findOrFail($id);
            File::delete($product->image);
            $product->delete();
            return redirect(route('product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
