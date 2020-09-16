<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $r){

        $validation = array(
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'

        );
        $r->validate($validation);

        $Contact = new Contact;
        $Contact->name = $r->get('name');
        $Contact->email = $r->get('email');
        $Contact->subject = $r->get('subject');
        $Contact->message = $r->get('message');
        $Contact->save();


        return back()->with('msg', 'Your message has been sent. Thank you!');


    }
}
