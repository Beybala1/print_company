<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class PermissionAdminController extends Controller
{
    public function index()
    {   
        //Helper(app/helpers.php)
        ;
        $users = User::get();
        return view('backend.permission', get_defined_vars());
    }

    public function create()
    {
        ;
        return view('backend.create.permission_create');
    }

    public function show($id)
    {
        ;
        $user = User::findOrFail($id);
        return view('backend.show.permission', get_defined_vars());
    }

    public function store(StorePermissionRequest $request)
    {
        try {
            $request->validated();
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>1,
            ]);
            return redirect(route('permission.index'))
                ->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }

    public function destroy($id)
    {
        ;
        User::findOrFail($id)->delete();
        return back()
            ->with('success', 'Əməliyyat uğurla həyata keçirildi');
    }

    public function storeRole(Request $request)
    {
        try {
            $user = User::find($request->id);
            $role = Role::find($request->role);
            $user->syncRoles($role);
            return redirect(route('permission.index'))  
                ->with('success', 'Əməliyyat uğurla həyata keçirildi');
        } catch (\Exception $e) {
            return back()->with('warning', 'Əməliyyat uğursuz oldu');
        }
    }
}
