<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubProductRequest;
use App\Http\Requests\UpdateSubProductRequest;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubProductAdmincontroller extends Controller
{
    public function createSubProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.create.sub_product_create',get_defined_vars());
    } 

    public function store(StoreSubProductRequest $request, Product $product)
    {
        try {
            $request->validated();
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

    public function update(UpdateSubProductRequest $request, SubProduct $subProduct)
    {
        try {
            $request->validated();
            if ($request->hasFile('image')) {
                $file = time().'.'.$request->image->extension();
                $request->image->storeAS('public/uploads/images/',$file);
                $image = 'storage/uploads/images/'.$file;
                File::delete($subProduct->image);
            }
            else{
                $image = $subProduct->image;
            }
            $subProduct->update([
                'title'=>$request->title,
                'description_1'=>$request->description_1,
                'description_2'=>$request->description_2,
                'description_3'=>$request->description_3,
                'description_4'=>$request->description_4,
                'description_5'=>$request->description_5,
                'image'=>$image,
            ]);
           
            return redirect(route('sub_product.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
