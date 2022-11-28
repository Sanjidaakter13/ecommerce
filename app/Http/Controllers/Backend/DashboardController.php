<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function view()
    {
        return view ('backend.template.master');
    }

    public function dashboard_view()
    {
        return view ('backend.template.dashboard');
    }

    public function login()
    {
        return view('backend.layouts.admin-login');
    }

    public function dologin(Request $request)
    {
       // dd($request->all());
        Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('dashboard');
    }

    public function admin_logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
