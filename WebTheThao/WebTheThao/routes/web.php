<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Cart;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontedn
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/login',[CheckoutController::class,'login']);
Route::POST('/search-product',[HomeController::class,'search_product']);
Route::get('/product-cart',[HomeController::class,'product_cart']);


//Category_product

Route::get('/category-product/{category_id}',[CategoryProduct::class,'show_category_home']);
Route::get('/detail-product/{product_id}',[ProductController::class,'detail_product']);

//Cart
Route::post('/save-cart',[CartController::class,'save_cart']);
Route::get('/show-cart',[CartController::class,'show_cart']);
Route::get('/gio-hang',[CartController::class,'gio_hang']);
Route::get('/delete-to-cart/{rowId}',[CartController::class,'delete_to_cart']);
Route::post('/update-cart-quantity',[CartController::class,'update_cart_quantity']);

//===============================================

//Backend
Route::get('/admin',[AdminController::class,'index']);
Route::get('/page',[AdminController::class,'show_page']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/logout',[AdminController::class,'logout']);

//Category product
Route::get('/add-category-product',[CategoryProduct::class,'add_category_product']);
Route::get('/all-category-product',[CategoryProduct::class,'all_category_product']);
Route::post('/save-category-product',[CategoryProduct::class,'save_category_product']);
Route::get('/edit-category-product/{category_product_id}',[CategoryProduct::class,'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryProduct::class,'delete_category_product']);

Route::post('/update-category-product/{category_product_id}',[CategoryProduct::class,'update_category_product']);

//Product
Route::get('/add-product',[ProductController::class,'add_product']);
Route::get('/all-product',[ProductController::class,'all_product']);
Route::post('/save-product',[ProductController::class,'save_product']);
Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);

//Customer

Route::get('/all-customer',[CustomerController::class,'all_customer']);
Route::get('/delete-customer/{customer_id}',[CustomerController::class,'delete_customer']);
//FE Customer
Route::get('/register-customer',[CustomerController::class,'register_customer']);
Route::post('/add-customer-fe',[CustomerController::class,'add_customer_fe']);
Route::get('/login-checkout',[CustomerController::class,'login_checkout']);
Route::get('/logout-checkout',[CustomerController::class,'logout_checkout']);
Route::post('/login-customer',[CustomerController::class,'login_customer']);

?>