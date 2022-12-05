<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

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
                   'total'=>$products->price*1,
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
            $getcart[$id]['total']=$getcart[$id]['price']*$getcart[$id]['quantity'];
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
              'total'=>$products->price*1,
          ];
          session()->put('cart',$getcart);
        }
        return redirect()->route('shop.view');
    }
 
    public function clear_cart()
    {
        session()->forget('cart');
        return redirect()->route('shoppingcart.view');
    }

    public function update_cart(Request $request,$id )
    {
        $products=Product::find($id);
        $getcart=session()->get('cart');
        if($products->quantity>=$request->quantity)
        {
        $getcart[$id]['quantity']=$request->quantity;
        $getcart[$id]['total']=$getcart[$id]['price']*$getcart[$id]['quantity'];
        session()->put('cart',$getcart);
    }
    return redirect()->back();
    }

    public function delete_cart($id)
    {
        $getcart=session()->get('cart');
        unset($getcart[$id]);
        session()->put('cart',$getcart);
        return back();
    }
}
