<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class Khachhang extends Controller
{
    public function AuthLogin(){
        $ma_adm = Session::get('ma_adm');
        if($ma_adm){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    
    
    public function all_khachhang(){
        $this->AuthLogin();
    $all_khachhang = DB::table('khachhang')
    ->orderby('khachhang.ma_khach_hang','desc')->paginate(3);

    $manager_khachhang  = view('admin.all_khachhang')->with('all_khachhang',$all_khachhang);
    return view('admin.admin_layout')->with('admin.all_khachhang', $manager_khachhang);
    
    
        
    }
    public function save_khachhang(Request $request){
        $this->AuthLogin();
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
    public function edit_khachhang($ma_khach_hang){
        $this->AuthLogin();
        
        $edit_khachhang = DB::table('khachhang')->where('ma_khach_hang',$ma_khach_hang)->get();

        $manager_khachhang  = view('admin.edit_khachhang')->with('edit_khachhhang',$edit_khachhang);

        return view('admin.admin_layout')->with('admin.edit_khachhang', $manager_khachhang);
    }
    public function update_khachhang(Request $request,$ma_khach_hang){
        $this->AuthLogin();
        
        $data = array();
        $data['kh_email'] = $request->kh_email;
        $data['kh_matkhau'] = $request->kh_matkhau;
        $data['kh_ten'] = $request->kh_ten;
        $data['kh_sdt'] = $request->kh_sdt;
        $data['kh_diachi'] = $request->kh_diachi;
        
        
        DB::table('khachhang')->where('ma_khach_hang',$ma_khach_hang)->update($data);
        Session::flash('message','Cập nhật danh mục khách hàng thành công'); 
        return redirect('all-khachhang');
    }
    public function delete_khachhang($ma_khach_hang){
  
        DB::table('khachhang')->where('ma_khach_hang',$ma_khach_hang)->delete();
        Session::flash('message','Xóa danh mục sản phẩm thành công');
        return Redirect ('all-khachhang');
    }
}