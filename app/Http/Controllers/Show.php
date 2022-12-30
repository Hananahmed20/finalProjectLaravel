<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit; 
use App\Testimonial; 

class Show extends Controller
{
    public function index(){
      $fruits = Fruit::select('*')->paginate(6);
      $testimonials = Testimonial::paginate(1);
      return view('publicWebsite.index')->with('fruits', $fruits)->with('testimonials', $testimonials);
     }
  
     public function contact(){
        return view('publicWebsite.contact');
     }

     public function about(){
        return view('publicWebsite.about');
     }

     public function testimonial(){
      $testimonials = Testimonial::paginate(2);
      return view('publicWebsite.testimonial')->with('testimonials', $testimonials);
     }
     
     public function fruit(){
      $fruits = Fruit::select('*')->paginate(3);
      return view('publicWebsite.fruit')->with('fruits', $fruits);
     }
     public function adminHome(){
      return view('fruits.index');
     }
     
     public function auth_Login(){
      return view('auth.login');
     }
}
