<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.admin.product');
    }
    public function store(Request $request)
    {
        request()->validate([
            'images' => 'required|image|mimes:png,jpg,svg,jpeg,jfif|min:0',
            'name' => 'required',
        ]);

        $srcimage = $request->file("image");
        $imageName = 'product_' . uniqid() . '.' . $srcimage->getClientOriginalExtension();
        $$srcimage->storeAs('img/product/', $imageName, 'public');
        $dataProduct = [
            'image' => $imageName,
            'name' => $request->name,
            'disponible' => true,
            'nombre_utilisation' => 0,

        ];
        Product::create($dataProduct);


        return redirect()->back();
    }
}
