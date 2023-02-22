<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function home(){
        return view('customer/home_page');
    }
    function layout(){
        return view('customer/layout');
    }
    function product(){
        return view('customer/products');
    }

    function pro_details(){
        return view('customer/product_details');
    }
    function profile(){
        return view('customer/profile');
    }
    function password(){
        return view('customer/password');
    }
    function cart(){
        return view('customer/cart');
    }


}
