<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
