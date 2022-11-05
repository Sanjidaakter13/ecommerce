<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class CustomerController extends Controller
{
    public function customer_list()
    {
        $customers=User::all();
        return view ('backend.pages.customer.list',compact('customers'));
    }

    public function customer_delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function customer_view($id)
    {
        $users=User::find($id);
        return view ('backend.pages.customer.view',compact('users'));
    }
}
