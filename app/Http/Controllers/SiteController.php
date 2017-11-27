<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Newsletter;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function saveContact(Request $request)
    {
        $contact = Contact::create($request->all());

        return response($contact, 200);
    }

    public function newsletterSignup(Request $request)
    {
        $newsletter = Newsletter::create($request->all());

        return response($newsletter, 200);
    }
}
