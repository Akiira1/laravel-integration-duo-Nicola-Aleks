<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("/back/users/all",compact("users"));
    }
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view("/back/users/create", compact("users", "roles"));
    }
    public function store(Request $request)
    {
        $user = new User;
        $roles = Role::all();
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'role'=> 'required',
            'password'=> 'required',
        ]); // store_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->password = $request->password;
        $user->save(); // store_anchor
        return redirect()->route("user.index")->with("message", "New User successfuly created !");
    }
    public function show($id)
    {
        $user = User::find($id);
        return view("/back/users/show",compact("user"));
    }
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::all();
        $user = User::find($id);
        return view("/back/users/edit",compact("user", "users", "roles"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $roles = Role::all();
        $request->validate([
            'role'=> 'required',
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]); // update_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->password = $request->password;
        $user->save(); // update_anchor
        return redirect()->route("user.index")->with("message", "User successfuly updated !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("message", "User successfuly deleted !");
    }
}