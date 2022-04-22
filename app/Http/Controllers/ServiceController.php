<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function create()
    {
        $services = Service::all();
        return view("/back/services/create", compact("services"));
    }
    public function store(Request $request)
    {
        $service = new Service;
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
        ]); // store_validated_anchor;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icone = $request->icone;
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with("message", "New Service successfuly created !");
    }
    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/show",compact("service"));
    }
    public function edit($id)
    {
        $services = Service::all();
        $service = Service::find($id);
        return view("/back/services/edit",compact("service", "services"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $request->validate([
            'icone'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
        ]); // update_validated_anchor;
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with("message", "Service successfuly updated !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with("message", "Service successfuly deleted !");
    }
}
