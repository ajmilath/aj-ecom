<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SellerregController extends Controller
{
    function seller_register(Request $request){
        $seller_name = $request->seller_name;
        $seller_email = $request->seller_email;
        $seller_address = $request->seller_address;
        $seller_phone = $request->seller_phone;
        $seller_gender = $request->gender;
        $seller_company = $request->company_name;
        $acc_holder_name = $request->acc_holder_name;
        $ifsc_code = $request->ifsc;
        $branch = $request->branch;
        $account_name = $request->acc_name;
        // $seller_image = $request->seller_img;
        $img = 'seller'.time().".".$request->seller_img->getClientOriginalName();
        $request->seller_img->storeAs('public/profile',$img );
        
        $result = DB::table('sellers_tbl')->insert([
            'name'=>$seller_name,
            'email'=>$seller_email,
            'address'=>$seller_address,
            'phone'=>$seller_phone,
            'gender'=>$seller_gender,
            'company_name'=>$seller_company,
            'acc_holder_name'=>$acc_holder_name,
            'ifsc'=>$ifsc_code,
            'banch'=>$branch,
            'acc_name'=>$account_name,
            'seller_image'=> $img
        ]);

        return view('common/sreg');
    }

}
