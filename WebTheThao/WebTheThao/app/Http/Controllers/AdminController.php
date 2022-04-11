<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function Auth(){
        $admin_id= Session::get('admin_id');
        if($admin_id){
            Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('admin')->send();

        }
    }

    public function index(){
        return view('admin_login');
    }
    //
    public function show_page(){
        $this->Auth();
        return view('admin.dashboard');
    }
    
    public function dashboard(Request $request){
        $this->Auth();
        $admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);

    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/page');// tra ve trang page
        }else{
            return Redirect::to('/admin')->with('error','Mật khẩu hoặc tài khoản bị sai.Vui lòng nhập lại');
        }

    }

    public function logout(){
        $this->Auth();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
   
}
