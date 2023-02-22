<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EcomController;
use App\Http\Controllers\SellerregController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SellerloginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[CommonController::class,'ind']);
// Route::get('/seller_login',[CommonController::class,'sel']);

Route::get('customer_login',[CommonController::class,'customerlogin']);
Route::post('customer_login',[CommonController::class,'customerlogin']);
Route::get('customer_registration',[CommonController::class,'customer_reg']);


Route::get('/seller_prof',[EcomController::class,'sel_prof']);
Route::get('product_catelogue',[EcomController::class,'catelog']);
Route::get('add_product',[EcomController::class,'add_product']);
Route::get('/Change_password',[EcomController::class,'password']);
Route::get('/Update_stock',[EcomController::class,'stock']);
Route::get('seller_recent_orders',[EcomController::class,'recent_orders']);


Route::get('admin',[AdminController::class,'home']);
Route::get('approve_seller',[AdminController::class,'approveseller']);
Route::get('view_seller',[AdminController::class,'viewseller']);
Route::get('view_customer',[AdminController::class,'view_customer']);


Route::get('customer',[CustomerController::class,'home']);
Route::get('layout_customer',[CustomerController::class,'layout']);
Route::get('products',[CustomerController::class,'product']);
Route::get('products_details',[CustomerController::class,'pro_details']);
Route::get('customer_profile',[CustomerController::class,'profile']);
Route::get('customer_profile/user_password',[CustomerController::class,'password']);
Route::get('customer/cart',[CustomerController::class,'cart']);



Route::get('/seller_reg',[CommonController::class,'seller']);

// Route::view('/seller_reg','common/sreg');
Route::post('/seller/register',[SellerregController::class,'seller_register']);

Route::get('/seller/login',function(){

    return view('common/seller_login');

});

Route::post('seller_login',[SellerloginController::class,'sellerlogin']);
