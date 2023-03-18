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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubProduct $subProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubProductRequest $request, SubProduct $subProduct)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubProduct $subProduct)
    {
       //
    }
}
