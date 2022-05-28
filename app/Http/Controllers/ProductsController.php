<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|unique:products',
            'name'=>'required',
            'category' => 'required',
            'warehouse'=>'required',
            'desc'=>'required'
        ]);
        $product = new Product();
        $product->productID = $validated['id'];
        $product->name = $validated['name'];
        $product->desc = $validated['desc'];
        $product->warehouse_id = $validated['warehouse'];
        $product->category_id = $validated['category'];
        $product->save();

        return view('welcome');


    }
}
