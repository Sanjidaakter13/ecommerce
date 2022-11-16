<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function register()
    {
        return view('frontend.layouts.register');
    }

    public function doregistration(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'mobile'=>$request->number,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('home');
    }

    public function dologin(Request $request)
    {
        $user=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $products=Product::where('name','like','%'.$request->product.'%')->get();
        return view('frontend.layouts.search',compact('products'));

    }
}
