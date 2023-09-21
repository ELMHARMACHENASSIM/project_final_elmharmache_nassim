<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('backend.product', compact('products'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:png,jpg,svg,jpeg,jfif|min:0',
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'prix' => 'required',
            'type' => 'required',
        ]);

        $srcimage = $request->file("image");
        $imageName = 'product_' . uniqid() . '.' . $srcimage->getClientOriginalExtension();
        $srcimage->storeAs('img/adminproduct/', $imageName, 'public');
        $dataProduct = [
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'prix' => $request->prix,
            'type' => $request->type,

        ];
        Product::create($dataProduct);

        return redirect()->back();
    }
    public function deleteitem(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
