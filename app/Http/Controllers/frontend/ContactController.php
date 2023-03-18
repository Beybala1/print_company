<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Lang;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(MessageRequest $request)
    {
        try {
            $request->validated();
            Message::create($request->validated());
            return back()->with('success', Lang::get('message.succcess'));
        } catch (\Exception $e) {
            return back()->with('warning', Lang::get('message.error'));
        }
    }
}
