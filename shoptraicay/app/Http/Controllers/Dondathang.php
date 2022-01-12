<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
class Dondathang extends Controller
{
    public function all_dondathang(){
        $all_dondathang = DB::table('don_dat_hang')->get();
        $manager_dondathang  = view('admin.all_dondathang')->with('all_dondathang',$all_dondathang);
        return view('admin.admin_layout')->with('admin.all_dondathang', $manager_dondathang);
        
        
            
        }
        public function save_dondathang(Request $request){
           
            $data = array();
            $data['ten_nguoi_nhan'] = $request->ten_nguoi_nhan;
            $data['email_nguoi_nhan'] = $request->email_nguoi_nhan;
            $data['sdt_nguoi_nhan'] = $request->sdt_nguoi_nhan;
            $data['dia_chi_nguoi_nhan'] = $request->dia_chi_nguoi_nhan;
            $data['ghi_chu_dat_hang'] = $request->ghi_chu_dat_hang;
            $data['tong_tien'] = $request->tong_tien;
            $data['tinh_trang_dat_hang'] = $request->tinh_trang_dat_hang;
            $data['ngay_dat'] = $request->ngay_dat;
            $data['ngay_giao'] = $request->ngay_giao;
           
    
            DB::table('don_dat_hang')->insert($data);
            Session::flash('message','Thêm sản phẩm thành công');
            return view('admin.them_sanpham');
        }
    }
    

