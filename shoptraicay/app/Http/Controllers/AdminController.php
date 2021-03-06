<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $ma_adm = Session::get('ma_adm');
        if($ma_adm){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
        
    }

    public function index(){
        

        return view('admin.admin_login');
    }
    public function show_dashboard(){
       
        $this->AuthLogin();
        return view('admin.dashboard');
        
    }
    public function dashboard(Request $request){
        
        $ten_dn = $request->ten_dn;
    	$mat_khau = $request->mat_khau;

    	$result = DB::table('adm')->where('ten_dn',$ten_dn)->where('mat_khau',$mat_khau)->first();
    	if($result){
            Session::put('ten_adm',$result->ten_adm);
            Session::put('ma_adm',$result->ma_adm);
            return Redirect::to('/dashboard');
        }else{
            Session::flash('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/admin');
        }
    }
    public function log_out(){
       
        Session::forget(['ten_adm', 'ma_adm']);
       
      
        return Redirect::to('/admin');
    }
    public function register_ne(){
        return view('admin.admin_register');
    }
    public function dangki(Request $request){
        $validatedData = $request->validate([
            'ten_dn' => ['required', 'unique:adm'],
            'ten_adm' => ['required'],
            'sdt' => ['required','numeric'],
            'mat_khau' => ['required','min:8'],
            'nhaplaimatkhau' => ['required','same:mat_khau'],
        ]);
        $data =$request->all();
        DB::table('adm')->insert([
            'ten_dn'=>$data['ten_dn'],
            'sdt'=>$data['sdt'],
            'ten_adm'=>$data['ten_adm'],
            'mat_khau'=>$data['mat_khau']
        ]);
        Session::flash('message','ok');
        return redirect()->route('login');
    }
}
