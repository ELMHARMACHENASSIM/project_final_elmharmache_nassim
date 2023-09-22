<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('backend.product', compact('products'));
    }
    public function store(Request $request){
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
    public function update(Request $request, Product $product)
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
        Storage::disk("public")->delete('img/adminproduct/' . $product->image);
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

        $product->update($dataProduct);

        // *Redirect with a success message or do any other necessary actions
        return redirect()->back();
    }

    public function deleteitem(Product $product)
    {
        if (strlen($product->image) >= 18) {
            Storage::disk("public")->delete('img/adminproduct/' . $product->image);
        }
        $product->delete();
        return redirect()->back();
    }
}
