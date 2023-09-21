<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        $shuffledProducts = $products->shuffle()->take(3);
        $lastFourItems = Product::latest()->limit(4)->get();
        $lastEightItems = Product::latest()->limit(8)->get();
        $lastOne = Product::latest()->limit(1)->get();

 
        return view('home',compact('products','shuffledProducts','lastFourItems','lastEightItems','lastOne'));
    }
}
