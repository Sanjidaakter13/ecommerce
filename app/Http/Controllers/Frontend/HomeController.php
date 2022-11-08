<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class HomeController extends Controller
{
    public function home_view()
    {
        return view ('frontend.layouts.home');
    }

    public function shop_view()
    {
        return view('frontend.layouts.shop');
    }

    public function shopdetail_view()
    {
        return view('frontend.layouts.shop-detail');
    }

    public function shopping_cart_view()
    {
        return view('frontend.layouts.shopping-cart');
    }

    public function checkout_view()
    {
        return view('frontend.layouts.checkout');
    }

    public function contact_view()
    {
        return view ('frontend.layouts.contact');
    }
}
