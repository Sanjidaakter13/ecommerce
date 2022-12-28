<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\suppport\Facades\Session;
use App\Models\Product;

class WishlistController extends Controller
{
    public function wishlist_view()
    {
        return view('frontend.layouts.wishlist');
    }

    public function wishlist($id)
    {
        $products=Product::find($id);
        $wishlist=session()->get('list');
        if(empty($wishlist))
        {
            $newlist=[
                $id=>[
                    'id'=>$products->id,
                    'name'=>$products->name,
                    'price'=>$products->price,
                    'image'=>$products->image,
                ]
            ];
            session()->put('list',$newlist);
            $wishlist=session()->get('list');
        }
        return redirect()->back();
    }

    
}
