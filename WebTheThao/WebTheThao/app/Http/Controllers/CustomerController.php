<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
session_start();
class CustomerController extends Controller
{
    //Back end
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function all_customer(){
        $this->AuthLogin();
        $all_customer= DB::table('tbl_customer')->orderBy('customer_id','desc')->get();
        $manager_customer= view('admin.Customer.all_customer')->with('all_customer',$all_customer);
        return view('admin_layout')->with('admin.Customer.all_customer',$manager_customer);
    }

    public function delete_customer($customer_id){
        $this->AuthLogin();
        DB::table('tbl_customer')->where('customer_id',$customer_id)->delete();
        return Redirect::to('/all-customer')->with('success','Xóa khách hàng sản phẩm thành công');
    }

    //Front end
    public function register_customer(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','asc')->get(); 
        return view('pages.checkout.register_customer')->with('category',$cate_product);
    }
    public function add_customer_fe(Request $request){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','asc')->get(); 
        $data=array();
        $data['customer_name']=$request -> customer_name;
        $data['customer_password']= md5($request -> customer_password);
        $data['customer_email']=$request -> customer_email;
        $data['customer_phone']=$request -> customer_phone; 
        $phone= $request -> customer_phone;
        $email= $request -> customer_email;

    
        $check = DB::table('tbl_customer') ->where('customer_phone',$phone)->exists();
        $check = DB::table('tbl_customer') ->where('customer_email',$email)->exists();

        if($check)
        {
            return Redirect()->back()->with('error','Số điện thoại  đã được đăng ký.Vui lòng chọn số điện thoại khác')->withInput();
        }
     $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
        Session::put('customer_phone',$request->customer_phone);
  
        return view('pages.checkout.cart')->with('category',$cate_product);

    }
  
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','ASC')->get();

    	return view('pages.checkout.login_checkout')->with('category',$cate_product);
    }
    public function logout_checkout(){
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer(Request $request){
    	$email = $request->email_account;
    	$password = md5($request->password_account);
    	$result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
    	
    	if($result){
    		Session::put('customer_id',$result->customer_id);
			Session::put('customer_name',$result->customer_name);
            Session::put('customer_phone',$result->customer_phone);

    		return Redirect::to('/login-checkout');
    	}else{
			
    		return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không đúng!');
    }
}
}
