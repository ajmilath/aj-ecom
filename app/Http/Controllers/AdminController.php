<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function home()
    {
        return view('admin/home');
    }
    function approveseller()
    {
        return view('admin/approveseller');
    }
    function viewseller()
    {
        return view('admin/seller');
    }
    function view_customer()
    {
        return view('admin/customer');
    }
}
