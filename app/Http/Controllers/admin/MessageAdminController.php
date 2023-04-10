<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('backend.message',get_defined_vars());
    }
   
    
    public function show(string $id)
    {
        try {
            $message = Message::find($id);
            return view('backend.show.message_show',get_defined_vars());
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
            Message::find($id)->delete();
            return redirect(route('message.index'))->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('errors', 'Əməliyyat uğursuz oldu');
        }
    }
}
