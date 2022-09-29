<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product_list()
    {   
        $products=Product::paginate(5);

        return view ('backend.product.list',compact('products'));
    }

    public function product_create()
    {
        return view ('backend.product.form');
    }

    public function product_store(Request $request)
    {
        //dd($request->all());

        Product::create([

            'name'=>$request->pro_name,
            'quantity'=>$request->pro_quantity,
            'price'=>$request->pro_price,
            'weight'=>$request->pro_weight,
            'description'=>$request->pro_description,
            'image'=>$request->pro_image,

        ]);

        return redirect()->route('product.list');
    }
}
