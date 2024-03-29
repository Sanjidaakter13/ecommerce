<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function home_view()
    {
        return view ('frontend.layouts.home');
    }

    public function shop_view()
    {
        $products=Product::paginate(3);
        return view('frontend.layouts.shop',compact('products'));
    }

    public function shopdetail_view()
    {
        return view('frontend.layouts.shop-detail');
    }

    public function shopping_cart_view()
    {
        $products=Product::all();
        return view('frontend.layouts.shopping-cart',compact('products'));
    }

    public function checkout_view()
    {
        return view('frontend.layouts.checkout');
    }

    public function contact_view()
    {
        return view ('frontend.layouts.contact');
    }
    
    public function product_view($id)
    {
        $product=Product::find($id);
        return view('frontend.layouts.product-view',compact('product'));
    }

    public function changeLanguage($lang)
    {
        //session()->put('key',value)
        session()->put('loc',$lang);
        return redirect()->back();
    }
}
