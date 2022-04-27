<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all", compact("testimonials"));
    }
    public function create()
    {
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $this->authorize("create", Testimonial::class);

        $testimonial = new Testimonial;
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'description' => 'required',
        ]); // store_validated_anchor;
        $testimonial->name = $request->name;
        $testimonial->post = $request->post;
        $testimonial->description = $request->description;
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/show", compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit", compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $this->authorize("update", $testimonial);
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'description' => 'required',
        ]); // update_validated_anchor;
        $testimonial->name = $request->name;
        $testimonial->post = $request->post;
        $testimonial->description = $request->description;
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful update !");
    }
    public function destroy($id, Request $request)
    {
        if(decrypt($request->id) == $id){
            $testimonial = Testimonial::find($id);
            $this->authorize("delete", $testimonial);
            $testimonial->delete();
            return redirect()->back()->with("message", "Successful delete !");
        }
        else{
            return redirect()->back()->with("message", "Vous n'avez pas le droit !");
        }
    }
}
