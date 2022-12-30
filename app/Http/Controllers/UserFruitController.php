<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FruitRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Fruit; 

class UserFruitController extends Controller
{
    public function show()
    {
        $fruits = Fruit::select('*')->paginate(3);
        return view ('publicWebsite.index')->with('fruits', $fruits);
    }
}
