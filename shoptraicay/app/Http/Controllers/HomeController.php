<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\loaiqua;
use App\Models\qua;
use Cart;
session_start();

class HomeController extends Controller
{
    public function AuthLogin(){
        $ma_khachhang = Session::get('ma_khach_hang');
        if($ma_khachhang){
            return Redirect::to('/trang-chu')->send();
        }

    }
    public function index()
    {
        $loaiqua =loaiqua::all();  
        $qua =qua::orderBy('ma_qua','desc')->paginate(6);
        $soluong = Cart::content()->count();
        return view('trangchu.home')->with('loaiqua',$loaiqua)->with('qua',$qua)->with('soluong',$soluong);
    }
    public function dangnhaptrangchu()
    {
        $this->AuthLogin();
        $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        return view('trangchu.login_register')->with('soluong',$soluong)->with('loaiqua',$loaiqua);
    }
    public function dangxuattrangchu(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }
    public function dangkikh1()
    {   $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        return view('trangchu.dangkikh')->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }

    public function timkiem(Request $request)
    {
        $soluong = Cart::content()->count();
        $tukhoa = $request->timkiem;
        $loaiqua =loaiqua::all();  
        $sanphamtimkiem =qua::where('ten_qua','like','%'.$tukhoa.'%')->get(); 
        return view('trangchu.timkiem')->with('loaiqua',$loaiqua)->with('sanphamtimkiem',$sanphamtimkiem)->with('soluong',$soluong);
    } 
    
}
