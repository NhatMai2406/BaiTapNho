<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\Session;
session_start();
class ProductController extends Controller
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
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id')->get();
  
        
        return view('admin.Product.add_product')->with('cate_product', $cate_product);
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product=  DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->orderBy('tbl_product.product_id','desc')->get() ;//tham gia
        $manager_category_product= view('admin.Product.all_product')->with('all_product',$all_product);
              return view('admin_layout')->with('admin.Product.all_product',$manager_category_product);

    }
     
    public function checkProductAdd(Request $request){
        $this->validate($request,[
        'product_image'=>'required|image',
        ],
      );
    } 

    public function save_product(Request $request)
    {
        $this->AuthLogin();
        $data=array();
        $this->checkProductAdd($request);
        $product_name=$request -> product_name;
        $result = DB::table('tbl_product')->where('product_name',$product_name)->first();
        if($result){
             return Redirect::to('/all-product')->with('success','Thêm danh mục sản phẩm thất bại tên sản phẩm bị trùng');
        }else{
        $data['product_name']=$product_name;
        $data['category_id']=$request -> category_id;
        $data['product_price']=$request -> product_price;
        $data['product_desc']=$request -> product_desc;
        $data['product_content']=$request -> product_content;
        $data['product_status']=$request -> product_status;
        $data['product_quantity']=$request -> product_quantity;
        $get_image = $request->file('product_image');
        $path = 'public/upload/';
        //$path_gallery = 'public/upload/gallery/';
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
      
            $data['product_image']=$new_image;
           

        }
        DB::table('tbl_product')->insert($data);
        return Redirect::to('/all-product')->with('success','Thêm danh mục sản phẩm thành công');
        }
    }
    public function update_product(Request $request, $product_id){
        $this->AuthLogin();
        $data=array();
        $data['product_name']=$request -> product_name;
        $data['category_id']=$request -> category_id;
        $data['product_price']=$request -> product_price;
        $data['product_desc']=$request -> product_desc;
        $data['product_content']=$request -> product_content;
        $data['product_status']=$request -> product_status;
        $get_image = $request->file('product_image');
        $path = 'public/upload/';
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $this->checkProductAdd($request);
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
      
            $data['product_image']=$new_image;
        

        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        return Redirect::to('/all-product')->with('success','Update sản phẩm thành công');

    }
    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_product=DB::table('tbl_category_product')->orderBy('category_id','desc')->get();

        $edit_product=  DB::table('tbl_product')->where('product_id',$product_id)->first();
        $manager_product= view('admin.Product.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
        return view('admin_layout')->with('admin.Product.edit_product',$manager_product);

    }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        return Redirect::to('/all-product')->with('success','Xóa danh mục sản phẩm thành công');
    }

    //Frontend
    public function detail_product($product_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $detail_product=  DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->
        where('tbl_product.product_id',$product_id)->get() ;//tham gia
        return view('pages.product.show_detail')->with('category',$cate_product)->with('detail_product',$detail_product);
    }

  
}
