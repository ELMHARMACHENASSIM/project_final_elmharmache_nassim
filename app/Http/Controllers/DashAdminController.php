<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{
    public function index(){
        return view('backend.dashadmin');
    }

}
