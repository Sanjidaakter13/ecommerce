<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderdetailController extends Controller
{
    public function orderdetail_list()
    {
        return view('frontend.pages.order-details.list');
    }
}
