<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function user_list(){
        $users=User::orderBy('id','desc')->paginate(5)->all();
        return view('backend.pages.user.list',compact('users'));
    }

    public function user_create(){
        $roles=Role::all();
        return view('backend.pages.user.form',compact('roles'));
    }

    public function user_store(Request $request){
      //dd($request->all());
       
       $request->validate([
        'user_name'=>'required',
        'user_password'=>'required|min:6',
        'user_email'=>'required|email|unique:users,email',
        'role_id'=>'required|exists:roles,id',
     ]);

        User::create([
          'name'=>$request->user_name,
          'password'=>bcrypt($request->password),
          'role_id'=>$request->role_id,
          'email'=>$request->user_email,
          'mobile'=>$request->user_mobile
        ]);
       

        return redirect()->route('user.list');
    }
}
