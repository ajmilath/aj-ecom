<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EcomController extends Controller
{
   
    
    
   
    function sel_prof(Request $request){
        $id = $request->session()->get('seller_id');
        $seller = DB::table('sellers_tbl')->where('id',$id)->first();
        return view('Seller/seller_profile',['seller_data'=>$seller]);
    }
    function catelog(){
        return view('Seller/product_catelog');
    }

    function add_product(){
        return view('Seller/add_product');
    }
    function password(){
        return view('Seller/password');
    }

    function stock(){
        return view('Seller/update_stock');
    }
    function recent_orders(){
        return view('Seller/recent_order');
    }
}
