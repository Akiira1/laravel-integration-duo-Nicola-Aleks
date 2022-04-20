<?php

namespace App\Http\Controllers;

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
        return view("/back/users/create", compact("users"));
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]); // store_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
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
        $users = User::all();
        $user = User::find($id);
        return view("/back/users/edit",compact("user", "users"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'role'=> 'required',
            'name'=> 'required',
            'email'=> 'required',
        ]); // update_validated_anchor;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->email = $request->email;
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