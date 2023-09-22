<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class EditUserController extends Controller
{
    public function index(){
        $roles = Role::whereNotIn('name',['admin'])->get();
        $users = User::all();
        return view('backend.edituser',compact('users','roles'));
    }
    public function editRole(Request $request , User $user){
        $user->assignRole($request->name);
        return redirect()->back();
            }
}
