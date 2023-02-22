<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    public function customerlogin(Request $req){
        
        return view('common/customer_login');
    }
    public function customer_reg(){
        return view('common/customer_reg');
    }
    public function sel(){
        $msg = '';
        return view('common/seller_login',['msg'=>$msg]);
    }
    function seller(){
        return view('common/sreg');
    }
    public function ind(){
        return view('common/index');
    }
   
}
