<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimonial;
use App\Http\Requests\TestimonialRequest;


class testimonialController extends Controller
{
  public function index()
  {
      $testimonials = testimonial::paginate(1);
      return view('testimonial.index')->with('testimonials', $testimonials);
  }

  
  public function create()
  {
      return view('testimonial.create');
  }

    public function store(TestimonialRequest $request){
      
      $testimonial = new testimonial();
      $testimonial->name = $request->input('name');
      $testimonial->description = $request->input('description');
      $filename = time().'.'.$request->image->extension();
      $request->image->move(public_path('testimonial_images'), $filename);
      $testimonial->image = '/testimonial_images/' . $filename;
 
      $result = $testimonial->save();

      return redirect()->back()->with('add_status',$result);



}
}
