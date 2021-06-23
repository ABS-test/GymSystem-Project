<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(Request $req){
       $validation = $req->validate([
           'firstName' => 'required|min:2|max:50',
           'lastName' => 'required|min:2|max:50',
           'email' => 'required|email:rfc,dns|min:5|max:50'
       ]);

       $contact = new Contact();
       $contact->firstName = $req->input('firstName');
       $contact->lastName = $req->input('lastName');
       $contact->email = $req->input('email');
       $contact->address = $req->input('address') ?? ''; 
       
       $contact->save();

       return redirect()->route('contact')->with('success', 'Your message has been sent');
    }

    public function allData(){
        $contact = new Contact;
        return view('pages/info', ['data' => $contact->all()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('pages/one-message', ['data' => $contact->find($id)]);
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-info');
    }
}