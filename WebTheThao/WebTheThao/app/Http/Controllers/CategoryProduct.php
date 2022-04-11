<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    //
    public function add_category_product(){
        $this->AuthLogin();
       // $category_product_status  = DB::table('category_status',0)->orderBy('category_id','DESC')->get();
        return view('admin.add_category_product');

    }
    public function all_category_product(){
        $this->AuthLogin();
    $all_category_product=  DB::table('tbl_category_product')->get();
    $manager_category_product= view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);

    }
    public function save_category_product(Request $request)// yeu cau 
    { $this->AuthLogin();
         $data= array();

        $category_name=$request -> category_product_name;
        $result = DB::table('tbl_category_product')->where('category_name',$category_name)->first();
        if($result){
            return Redirect::to('/all-category-product')->with('success','Thêm danh mục sản phẩm thất bại vì bị trùng tên');
        }else {
            $data['category_name']=$category_name;
             $data['category_status']=$request -> category_product_status;
              DB::table('tbl_category_product')->insert($data);
             return Redirect::to('/all-category-product')->with('success','Thêm danh mục sản phẩm thành công');
        }
    }

    public function edit_category_product($category_product_id){
        $this->AuthLogin();
        $edit_category_product=  DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product= view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
              return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);

    }
    public function update_category_product(Request $request ,$category_product_id){
        $this->AuthLogin();
        $data=array();
        $data['category_name']=$request -> category_product_name;
        $data['category_status']=$request -> category_product_status;

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        return Redirect::to('/all-category-product')->with('success','Update danh mục sản phẩm thành công');

    }
    public function delete_category_product($category_product_id){
        $this->AuthLogin();
         $parent = DB::table('tbl_product')->where('category_id',$category_product_id)->exists();
        if($parent)
        {
            return Redirect()->back()->with('success','Xóa không thành công vì danh mục này có sản phẩms')->withInput();
        }else{
            $parent = DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
              return Redirect::to('/all-category-product')->with('success','Xóa danh mục sản phẩm thành công');
        }
    }
    
//Front end

public function show_category_home($category_id){
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    
  
    $category_by_id = DB::table('tbl_product')
    ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->get();
    return view('pages.category.show_category')->with('category',$cate_product)->with('category_by_id',$category_by_id);

}
}


