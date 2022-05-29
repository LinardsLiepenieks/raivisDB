<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Warehouse;
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

        return redirect('/');


    }

    function delete(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');

    }

    function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validated = $request->validate([
            'productId' => 'required|unique:products,id,'.$product->id,
            'productName'=>'required',
            'productCategory' => 'required',
            $product->id.'warehouse'=>'required',
            'productDesc'=>'required'
        ]);
        $product->productID = $validated['productId'];
        $product->name = $validated['productName'];
        $product->desc = $validated['productDesc'];
        $product->warehouse_id = $validated[ $product->id.'warehouse'];
        $product->category_id = $validated['productCategory'];
        $product->save();

        return redirect('/');



    }
}
