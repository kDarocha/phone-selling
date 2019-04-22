<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with('brand')->get();
    }

    public function uploadImage(Request $request)
    {
        $image = $request->Product_image->store('products', ['disk' => 'public']);

        return $image;
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->image = $request->image_url;
        $product->amount = $request->amount;
        $product->save();

        return $product;
    }
}
