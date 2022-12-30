<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use App\Http\Requests\ContactRequest;
use App;
class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
          $contact = new Contact();

          $contact->name = $request->input('name');
          $contact->email = $request->input('email');
          $contact->phone = $request->input('phone');
          $contact->message = $request->input('message');
          $status = $contact->save();
          return redirect()->route('main')->with('status', $status);
 
    }

    public function show()
    {
        $contact = Contact::all();
        return view ('Admin.showContacts')->with('contact', $contact);
    }
    
    // public function destroy($id)
    // {
    //     $contact = Contact::find($id);
    //     $contact->delete();
    //             return redirect()->back();

    //     // Fruit::where('id',$id)->delete();
    //     // return redirect()->back();
    // }

}
