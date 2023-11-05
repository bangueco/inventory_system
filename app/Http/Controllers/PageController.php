<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewDashboard()
    {
        return view('dashboard');
    }

    public function viewManageProducts()
    {
        return view('manage_products');
    }

    public function viewEditProducts()
    {
        return view('edit_products');
    }

    public function viewLogin()
    {
        return view('Authentication.login');
    }
}
