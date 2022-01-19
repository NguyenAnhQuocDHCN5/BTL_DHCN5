<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;

class Dondathang extends Controller
{ 
    public function AuthLogin(){
    $ma_adm = Session::get('ma_adm');
    if($ma_adm){
        return Redirect::to('dashboard');
    }else{
        return Redirect::to('admin')->send();
    }
}

    
    public function all_dondathang(){
        $this->AuthLogin();
        $all_dondathang = DB::table('don_dat_hang')
        ->orderby('don_dat_hang.ma_don_dat_hang','desc')->paginate(3);
        $manager_dondathang  = view('admin.all_dondathang')->with('all_dondathang',$all_dondathang);
        return view('admin.admin_layout')->with('admin.all_dondathang', $manager_dondathang);
        
        
            
        }
        public function save_dondathang(Request $request){
            $this->AuthLogin();
           
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
           
    
            donhang::insert($data);
            Session::flash('message','Thêm sản phẩm thành công');
            return view('admin.them_sanpham');
        }
    
    public function don_hang($ma_don_dat_hang){
        $this->AuthLogin();

        $don_hang = DB::table('don_dat_hang')->where('ma_don_dat_hang',$ma_don_dat_hang)->get();
        $ct_don_hang = DB::table('chi_tiet_dat_hang')->where('ma_don_dat_hang',$ma_don_dat_hang)->get();

        $manager_dondathang  = view('admin.don_hang')->with('don_hang',$don_hang);

        return view('admin.admin_layout')->with('admin.don_hang', $manager_dondathang);
    }
        
    public function update_dondathang(Request $request,$ma_don_dat_hang)
        {
            $this->AuthLogin();
            $data = array();
            $data['ma_don_dat_hang'] = $request->ma_don_dat_hang;
            $data['tinh_trang_dat_hang'] = $request->tinh_trang_dat_hang;
            
            
            
            DB::table('don_dat_hang')->where('ma_don_dat_hang',$ma_don_dat_hang)->update($data);
            Session::flash('message','Cập nhật danh mục khách hàng thành công'); 
            return redirect('all-dondathang');
    }

    public function delete_dondathang($ma_don_dat_hang){
  
        DB::table('don_dat_hang')->where('ma_don_dat_hang',$ma_don_dat_hang)->delete();
        Session::flash('message','Xóa đơn sản phẩm thành công');
        return Redirect ('all-dondathang');
    }
}
    

