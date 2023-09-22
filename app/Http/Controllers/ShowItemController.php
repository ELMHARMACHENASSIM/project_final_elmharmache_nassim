<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowItemController extends Controller
{
    public function index(){
        return view('frontend.showitem');
    }
    public function showitem(Product $product){
        return view('frontend.showitem',compact('product'));
    }
}
