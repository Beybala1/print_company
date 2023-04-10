<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;
use App\Models\Social;
use Illuminate\Support\Facades\File;

class SocialAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $socials = Social::latest()->get();
        return view('backend.social',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        editor_abort();
        try {
            $social_edit = Social::find($id);
            return view('backend.update.social_update',get_defined_vars());
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        try {
            $social->update($request->validated());
            return redirect(route('social.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        destroyer_abort();
        try {
            $social = Social::findOrFail($id)->delete();
            return redirect(route('social.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }
}
