<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
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
    public function store(MapController $request)
    {
        abort_unless(\Illuminate\Support\Facades\Gate::allows('company_create'), 403);
        $company = Map::create($request->all());
        return redirect()->route('back/maps/all');
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
            'address_address' => 'required',
            'address_latitude' => 'required',
            'address_longitude' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
        ]); // update_validated_anchor;
        $map->link = $request->link;
        $map->name = $request->name;
        $map->number = $request->number;
        $map->save(); // update_anchor
        return redirect()->route("map.index")->with("message", "Successful update !");
    }
}
