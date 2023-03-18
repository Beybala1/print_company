<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\File;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create.contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        try {
            $request->validated();
            Contact::create([
                'email'=>$request->email,
                'phone_1'=>$request->phone_1,
                'phone_2'=>$request->phone_2,
                'place_1'=>$request->place_1,
                'place_2'=>$request->place_2,
            ]);
            
            return redirect(route('contact.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
        try {
            $contact_edit = Contact::find($id);
            return view('backend.update.contact_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        try {
            $request->validated();
            $contact->update([
                'email'=>$request->email,
                'phone_1'=>$request->phone_1,
                'phone_2'=>$request->phone_2,
                'place_1'=>$request->place_1,
                'place_2'=>$request->place_2,
            ]);
           
            return redirect(route('contact.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
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
            Contact::find($id)->delete();
            return redirect(route('contact.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
