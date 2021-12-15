<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {
        return view('trangchu.home');
    }
    public function dangnhaptrangchu()
    {
        return view('trangchu.login_register');
    }
    public function dangxuattrangchu(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }
    public function trangcanhan(){
        return view('trangchu.trangcanhan');
    }
    public function lienhe(){
        return view('trangchu.lienhe');
    }
    public function dangkikh(Request $request){
        $validatedData = $request->validate([
            'kh_email' => ['required', 'unique:khachhang'],
            'ten_kh' => ['required'],
            'sdt_kh' => ['required','numeric'], 
            'diachi_kh' => ['required'],
            'mat_khau_kh' => ['required','min:8'],
            'nhaplaimatkhau_kh' => ['required','same:mat_khau_kh'],
        ]);
        $data =$request->all();
        DB::table('khachhang')->insert([
            'kh_email'=>$data['kh_email'],
            'kh_ten'=>$data['ten_kh'],
            'kh_sdt'=>$data['sdt_kh'],
            'kh_diachi'=>$data['diachi_kh'],
            'kh_matkhau'=>$data['mat_khau_kh']
        ]); 
        Session::flash('message','Bạn Đã đăng ký tài khoản thành công, mời bạn đăng nhập');
        return Redirect::to('/login');
    }
    public function dangnhapkh(Request $request){
        $email_kh = $request->email_kh;
    	$mat_khau_kh = $request->mat_khau_kh;
        

    	$result = DB::table('khachhang')->where('kh_email',$email_kh)->where('kh_matkhau',$mat_khau_kh)->first();
    	if($result){
            Session::put('kh_ten',$result->kh_ten);
            Session::put('kh_email',$result->kh_email);
            Session::put('ma_khach_hang',$result->ma_khach_hang);
            Session::put('kh_sdt',$result->kh_sdt);
            Session::put('kh_diachi',$result->kh_diachi);
            return Redirect::to('/');
        }else{
            Session::flash('message_1','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/login');
        }
    } 
    public function tintuc()
    {
        return view('trangchu.tintuc');
    }

    public function chitiettintuc()
    {
        return view('trangchu.chitiettintuc');
    }          
}
