<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function product_list()
    {   
        $products=Product::with('category')->paginate(5);

        return view ('backend.product.list',compact('products'));
    }

    public function product_create()
    {
        $categories=Category::all();
        return view ('backend.product.form',compact('categories'));
    }

    public function product_store(Request $request)
    {
        //dd($request->all());

        Product::create([

            'name'=>$request->pro_name,
            'category'=>$request->category_name,
            'quantity'=>$request->pro_quantity,
            'price'=>$request->pro_price,
            'weight'=>$request->pro_weight,
            'description'=>$request->pro_description,
            'image'=>$request->pro_image,

        ]);

        return redirect()->route('product.list');
    }
}
