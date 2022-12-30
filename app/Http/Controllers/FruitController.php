<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FruitRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Fruit; 
class FruitController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();
        return view ('Admin.index');
    }
    public function showallfruits()
    {
        $fruits = Fruit::all();
        return view ('Admin.showFruits')->with('fruits', $fruits);
    }
    public function create()
    {
        return view('Admin.create');
    }
    public function store(FruitRequest $request)
    {

        // $input = $request->all();
        // Fruit::create($input);
        // return redirect()->route('fruits.index');
        // $fruits = Fruit::all();
        // return view('fruits.index')->with('fruits', $fruits);

        // return redirect('fruits.index')->with('flash_message', 'fruit Addedd!');  
        
        //   $image = $request->file('image');
        //   $path = 'images/';
        //   $nameimg = time()+ rand(1,1000000000) . '.' . $image->getClientOriginalExtension();
        
        //   Storage::put($path.$nameimg, file_get_contents($image));
        //   $image = $path.$nameimg;

        $fruit = new Fruit();
        $fruit->name = $request->input('name');
        $fruit->price = $request->input('price');
        $fruit->description = $request->input('description');

        $filename = time().'.'.$request->image->extension();
		$request->image->move(public_path('folder'), $filename);
		$fruit->image = '/folder/' . $filename;
        // $path = $request->file('image')->store('public/fruite_images');
    	// $fileName = basename($path);
        // $fruit->image = $fileName;
        $fruit->save();
        return redirect()->route('fruits.index');
}
    
    public function view($id)
    {
        $fruite = Fruit::find($id);
        return view('Admin.show')->with('fruits', $fruite);
    }
    public function edit($id)
    {
        $fruite = Fruit::find($id);
        return view('Admin.edit')->with('fruite', $fruite);
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $fruite = Fruit::find($id);
        $fruite->name = $request->input('name');
        $fruite->price = $request->input('price');
        $fruite->description = $request->input('description');
        $fruite->image = $request->input('image');
        $fruite->update();

        // $input = $request->all();
        // $fruite->update($input);
        return redirect()->route('fruits.index');
    }
    
    public function destroy($id)
    {
        // $fruit = Fruit::find($id);
        // $fruit->delete();
        Fruit::where('id',$id)->delete();
        return redirect()->back();
    }

    public function search(Request $request){

            $fruits = Fruit::select('*')->where('name', $request->name )->paginate(3);
            return view('publicWebsite.search')->with('fruits' , $fruits);
        
        // $fruits=Fruit::all();
    
        // $fruits = null;
        // $search = request()->query('search');
    
        // if($search) {
        //     $fruits = Fruit::where('name' ,'LIKE' , "%{$search}%")
        //     ->orWhere('name','LIKE' , "%{$search}%")->get();
    
        // } else if (!$search){
        //     $fruits = Fruit::get();
        // }
        //     return view('publicWebsite.search',compact('fruits'));
    
        }
    public function restore($id)
    {
        // $fruit = Fruit::find($id);
        // $fruit->delete();
        Fruit::where('id',$id)->restore();
        return redirect()->back();
    }
    // public function destroy($id)
    // {
    //     Fruite::destroy($id);
    //     return redirect('fruite')->with('flash_message', 'fruite deleted!');  
    // }
}
