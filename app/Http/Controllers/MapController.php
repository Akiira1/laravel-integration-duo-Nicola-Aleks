<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view("/back/maps/all", compact("maps"));
    }
    public function show($id)
    {
        $map = Map::find($id);
        return view("/back/maps/show", compact("map"));
    }
    public function edit($id)
    {
        $map = Map::find($id);
        return view("/back/maps/edit", compact("map"));
    }
    public function update($id, Request $request)
    {
        $map = Map::find($id);
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
        ]); // update_validated_anchor;
        $map->name = $request->name;
        $map->phone = $request->phone;
        $map->mobile = $request->mobile;
        $map->save();
        return redirect()->route("map.index")->with("message", "Map successfuly updated !");
    }
}
