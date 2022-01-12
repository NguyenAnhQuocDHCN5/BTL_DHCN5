<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
class Sanpham extends Controller
{
    public function them_sanpham(){
        return view('admin.them_sanpham');
    }
    public function all_sanpham(){
    $all_sanpham = DB::table('qua')->get();
    $manager_sanpham  = view('admin.all_sanpham')->with('all_sanpham',$all_sanpham);
    return view('admin.admin_layout')->with('admin.all_sanpham', $manager_sanpham);
    
    
        
    }
    public function save_sanpham(Request $request){
       
    	$data = array();
       	$data['ma_loai'] = $request->ma_loai;
        $data['ten_qua'] = $request->ten_qua;
        $data['gia_qua'] = $request->gia_qua;
        $data['hinh_anh_qua'] = $request->hinh_anh_qua;
        $data['mo_ta_qua'] = $request->mo_ta_qua;
        $data['trang_thai_qua'] = $request->trang_thai_qua;
        $data['so_luong_qua'] = $request->so_luong_qua;

        DB::table('qua')->insert($data);
    	Session::flash('message','Thêm sản phẩm thành công');
        return view('admin.them_sanpham');
    }
    
}
