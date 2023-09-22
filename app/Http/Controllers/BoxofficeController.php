<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class BoxofficeController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('backend.boxoffice',compact('contacts'));
    }
}

