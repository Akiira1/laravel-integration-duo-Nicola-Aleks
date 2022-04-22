<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function __construct(){
        $this->middleware('adminVerification');
    }
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
            'button'=> 'required',
        ]); // update_validated_anchor;
        // $banner->image = $request->file("image")->hashName();
        $banner->button = $request->button;
        if ($request->file('image') == "") {
            $banner->image = $banner->image;
            $banner->save(); // update_anchor
        }else{
            $banner->image = $request->file("image")->hashName();
            $banner->save(); // update_anchor
            $request->file('image')->storePublicly('img/', 'public');
        }
        return redirect()->route("banner.index")->with("message", "Banner successfuly updated !");
    }

}
