<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{

   public function add_to_cart($id)
   {
       $products=Product::find($id);

       //CASE 1: If cart is empty
       $getcart=session()->get('cart'); //Here cart is a key
       if(empty($getcart))
       {
           $newcart=[
              $id=>[
                  'id'=>$products->id,
                  'name'=>$products->name,
                  'price'=>$products->price,
                  'quantity'=>1,
                  'image'=>$products->image,
              ]
              ];
             session()->put('cart',$newcart);
            $getcart=session()->get('cart');
       }

       //If cart is not empty but product exist
      // dd($getcart);
       if(array_key_exists($id, $getcart))
       //($key,$array)
       {
           $getcart[$id]['quantity']= $getcart[$id]['quantity']+1;
           session()->put('cart',$getcart);
       }

       //If cart is not empty and product not exist
       else
       {
         $getcart[$id]=[
             'id'=>$products->id,
             'name'=>$products->name,
             'price'=>$products->price,
             'quantity'=>1,
             'image'=>$products->image,
         ];
         session()->put('cart',$getcart);
       }
       return redirect()->route('shop.view');
   }

}
