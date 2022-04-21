<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function __construct(){
        $this->middleware('RoleVerification');
    }
    public function index()
    {
        $roles = Role::all();
        return view("/back/roles/all",compact("roles"));
    }
    public function show($id)
    {
        $role = Role::find($id);
        return view("/back/roles/show",compact("role"));
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with("message", "Role successfuly deleted !");
    }
}
