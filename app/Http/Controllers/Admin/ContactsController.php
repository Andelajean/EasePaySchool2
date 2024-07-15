<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //

    public function showAllContact()
    {
        $Contacts = Contact::all();
        return view('admin.contact.showAll',compact('Contacts'));
    }
}
