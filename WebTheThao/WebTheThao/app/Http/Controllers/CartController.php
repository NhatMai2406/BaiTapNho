<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class CartController extends Controller
{
    //
    public function gio_hang(Request $request){
        $meta_desc = "Gio hang cua ban";
        $meta_keywords="Gio hang";
        $meta_title="Gio hang";
        $url_canonical=$request->url();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        return view('pages.checkout.cart')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_title',$meta_title)
        ->with('meta_keywords',$meta_keywords);
    }
    public function save_cart(Request $request) {
        
        $productId= $request -> product_hidden;
        $quantity= $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
 
        $data['id']=$product_info->product_id;
        $data['qty']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['images']=$product_info->product_image;

        Cart::add($data);
        // Cart::destroy();
          return  Redirect::to('/show-cart');
     
    }
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        return view('pages.checkout.cart')->with('category',$cate_product);
    }
            
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty=$request->quantity_cart;
        Cart::update($rowId,$qty);
        return  Redirect::to('/show-cart');
    }
    public function delete_to_cart($rowId){
        Cart::update($rowId,0);// Cap nhat so luong
        $product_info = DB::table('tbl_product')->where('product_id',$rowId)->first();
        Session::put('product_id',$product_info);
        return  Redirect::to('/show-cart');


    }
}
