<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;


class Lienhe extends Controller
{
    public function all_lienhe(){
        $all_lienhe = DB::table('lien_he')->get();
        $manager_lienhe  = view('admin.all_lienhe')->with('all_lienhe',$all_lienhe);
        return view('admin.admin_layout')->with('admin.all_lienhe', $manager_lienhe);
        }
        public function save_lienhe(Request $request){
           
            $data = array();
            $data['ten_nguoi_lien_he'] = $request->ten_nguoi_lien_he;
            $data['sdt_nguoi_lien_he'] = $request->sdt_nguoi_lien_he;
            $data['email_nguoi_lien_he'] = $request->email_nguoi_lien_he;
            $data['dia_chi_nguoi_lien_he'] = $request->dia_chi_nguoi_lien_he;
            $data['noi_dung'] = $request->noi_dung;
            $data['ngay_lien_he'] = $request->ngay_lien_he;
            $data['ma_khach_hang'] = $request->ma_khach_hang;
           
    
            DB::table('khachhang')->insert($data);
            Session::flash('message','liên hệ thành công');
            return view('admin.all_lienhe');
        }
        public function delete_lienhe($ma_lien_he){
  
            DB::table('lien_he')->where('ma_lien_he',$ma_lien_he)->delete();
            Session::flash('message','Xóa liên hệ thành công');
            return Redirect ('all-lienhe');
        }
}
