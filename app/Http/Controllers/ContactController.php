<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //afficher formulaire
    //add push dans la base
    public function index(){
        return view('contact.contact');

        
    }
    // Store Contact Form data
    public function add(Request $request) {
       
 
    Contact::create($request->all());
    

    // 
    return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
}

}
