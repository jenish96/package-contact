<?php

namespace Demo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Demo\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function viewForm()
    {
        return view('contact::ContactForm');
    }

    public function addContact(Request $request)
    {
        Contact::create($request->all());

        return redirect('contact');
    }
}
