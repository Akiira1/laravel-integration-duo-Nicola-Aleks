<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    //
    public function index()
    {
        $titles = Title::all();
        return view("/back/titles/all", compact("titles"));
    }
    public function create()
    {
        return view("/back/titles/create");
    }
    public function store(Request $request)
    {
        $title = new Title;
        $request->validate([
            'title'=> 'required',
            'subtitle'=> 'required',
        ]); // store_validated_anchor;
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save(); // store_anchor
        return redirect()->route("title.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $title = Title::find($id);
        return view("/back/titles/show",compact("title"));
    }
    public function edit($id)
    {
        $title = Title::find($id);
        return view("/back/titles/edit",compact("title"));
    }
    public function update($id, Request $request)
    {
        $title = Title::find($id);
        $request->validate([
            'title'=> 'required',
            'subtitle'=> 'required',
        ]); // update_validated_anchor;
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->save(); // update_anchor
        return redirect()->route("title.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $title = Title::find($id);
        $title->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
