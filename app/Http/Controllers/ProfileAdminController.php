<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileAdminController extends Controller
{
    public function index()
    {
        return view('backend.profile');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $request->validated();
        $user = User::find(auth()->id());

        if(Hash::check($request->password,$user->password)){

            if(empty($request->password_new) or strlen($request->password_new)>5){

                if($request->password_new==$request->password_confirmation){
                    
                    if ($request->hasFile('image')) {
                        $file = time().'.'.$request->image->extension();
                        $request->image->storeAS('public/uploads/images/',$file);
                        $image = 'storage/uploads/images/'.$file;
                        File::delete($user->image);
                    }
                    else{
                        $image = $user->image;
                    }

                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->image = $image;
                    if (strlen($request->password_new)>5) {
                        $user->password = bcrypt($request->password_new);
                    }

                    $user->save();
                    return back()->with('success', 'Əməliyyat uğurla həyata keçirildi');
                }
                return back()->with('warning', 'Yeni parol ilə təkrar parol uyğun deyil');
            }  
            return back()->with('warning', 'Yeni parol 6 simvoldan az ola bilməz');
        } 
        return back()->with('warning', 'Daxil etdiyiniz parol yanlışdır');
    }
}
