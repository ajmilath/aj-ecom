<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use function PHPUnit\Framework\isNull;

class SellerloginController extends Controller
{
    //
    function sellerlogin(Request $req){
        $username = $req->username;
        $password = $req->password;

        $seller = DB::table('sellers_tbl')->where('email',$username)->first();
        // if(isNull($result))
        // {
        //     return view('seller_login',['msg'=>'Incorrect Username or password']);
        // }

        if(!is_null($seller))
        {
            if(($seller->email == $username) && ($seller->phone == $password)){
                $req->session()->put('seller_id',$seller->id);
                return redirect('/seller_prof');
            }
            else{
                return view('common/seller_login',['msg'=>'Incorrect Username or password']);
            }

        }

        else{
            return view('common/seller_login',['msg'=>'Incorrect Username or password']);

        }
        
    }
}
