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
        $products=Product::with('category')->orderBy('id','desc')->paginate(5);

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
    //Migration column name =>Input field name,
            'name'=>$request->pro_name,
            'category'=>$request->category_name,
            'quantity'=>$request->pro_quantity,
            'price'=>$request->pro_price,
            'weight'=>$request->pro_weight,
            'description'=>$request->pro_description,
            'image'=>$request->pro_image,

        ]);

        $request->validate([
            'pro_name'=>'required',
            'category_name'=>'required',
            'pro_quantity'=>'required|integer|min:1|max:10',
            'pro_price'=>'required|numeric|min:1',
            'pro_weight'=>'required|numeric',
        ]);

        return redirect()->route('product.list');
    }

    public function product_delete($id)
    {
        Category::find($id)->delete();

        return redirect()->back();
    }
}
