<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\binhluan;
use Illuminate\Support\Facades\Redirect;

class BinhluanController extends Controller
{
    public function AuthLogin(){
        $ma_adm = Session::get('ma_adm');
        if($ma_adm){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

        
    public function all_binhluan(){
        $this->AuthLogin();
        $all_binhluan = DB::table('binh_luan')
        ->orderby('binh_luan.ma_binhluan','desc')->paginate(5);
        $manager_binhluan  = view('admin.all_binhluan')->with('all_binhluan',$all_binhluan);
        return view('admin.admin_layout')->with('admin.all_lienhe', $manager_binhluan);
        }
        
        public function delete_binhluan($ma_binhluan){
  
            DB::table('binh_luan')->where('ma_binhluan',$ma_binhluan)->delete();
            Session::flash('message','Xóa bình luận thành công');
            return Redirect ('all-binhluan');
        }

    //Frontend
    public function binhluan(Request $request)  
    {
        $idsanpham = $request->sanphamid1;
        $validatedData = $request->validate([
            'ten_binhluan' => ['required',],
            'email_binhluan' => ['required'],
            'noidung_binhluan' => ['required'] 
        ]);
        $data =$request->all();
        $data1=binhluan::create([
            'binhluan_ten'=>$data['ten_binhluan'],
            'binhluan_email'=>$data['email_binhluan'],
            'binhluan_noidung'=>$data['noidung_binhluan'],
            'ma_qua'=>$idsanpham,
        ]); 
        return Redirect::back();
    } 
}
