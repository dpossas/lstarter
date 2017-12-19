<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('doc.index');
    }

    public function requirements()
    {
        return view('doc.requirements');
    }

    public function installation()
    {
        return view('doc.installation');
    }
}
