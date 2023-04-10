<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\File;

class FaqAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('backend.faq',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        publisher_abort();
        return view('backend.create.faq_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        try {
            Faq::create($request->validated());
            return redirect(route('faq.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
            $faq_edit = Faq::find($id);
            return view('backend.update.faq_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        try {
            $faq->update($request->validated());
            return redirect(route('faq.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
            Faq::find($id)->delete();
            return redirect(route('faq.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
