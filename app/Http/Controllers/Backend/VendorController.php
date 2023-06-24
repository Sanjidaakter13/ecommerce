<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VendorController extends Controller
{
    public function vendor()
    {
        return view('backend.layouts.vendor-login');
    }

    public function vendor_login(Request $request)
        {
            //dd($request->all());
            Auth::attempt([
                'email'=>$request->vendor_email,
                'password'=>$request->vendor_password,
            ]);
            return redirect()->route('dashboard');
        }
    
        public function vendor_logout()
        {
            Auth::logout();
            return redirect()->route('vendor.login');
        }
    
}
