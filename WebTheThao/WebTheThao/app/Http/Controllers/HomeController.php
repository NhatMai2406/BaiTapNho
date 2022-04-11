<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(4)->get();
        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);

    
    }
    public function search_product(Request $request){
        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','asc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.product.search_product')->with('category',$cate_product)->with('search_product',$search_product)->with('keywords',$keywords);
    }
    public function product_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','asc')->get(); 
        $all_product = DB::table('tbl_product')->where('product_active','1')->inRandomOrder('product_id')->get(); 
    }
}
