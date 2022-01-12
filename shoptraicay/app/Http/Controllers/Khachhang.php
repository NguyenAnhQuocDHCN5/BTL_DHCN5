<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
class Khachhang extends Controller
{
    
    
    public function all_khachhang(){
    $all_khachhang = DB::table('khachhang')->get();
    $manager_khachhang  = view('admin.all_khachhang')->with('all_khachhang',$all_khachhang);
    return view('admin.admin_layout')->with('admin.all_khachhang', $manager_khachhang);
    
    
        
    }
    public function save_khachhang(Request $request){
       
    	$data = array();
       	$data['kh_email'] = $request->kh_email;
        $data['kh_matkhau'] = $request->kh_matkhau;
        $data['kh_ten'] = $request->kh_ten;
        $data['kh_sdt'] = $request->kh_sdt;
        $data['kh_diachi'] = $request->kh_diachi;
       

        DB::table('khachhang')->insert($data);
    	Session::flash('message','Thêm sản phẩm thành công');
        return view('admin.them_sanpham');
    }
}
