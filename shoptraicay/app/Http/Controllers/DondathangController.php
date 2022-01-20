<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;

class DondathangController extends Controller
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
                $data['ngay_cap_nhat']=date('Y-m-d H:i:s');
    
                
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
