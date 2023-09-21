<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $productsall = Product::paginate(8); 
        $products = Product::all(); 

        return view('frontend.shop',compact('productsall','products'));
    }
}
