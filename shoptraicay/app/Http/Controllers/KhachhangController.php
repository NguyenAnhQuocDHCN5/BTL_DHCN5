<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\khachhang;
use App\Models\loaiqua;
use App\Models\qua;
use Cart;
use Illuminate\Support\Facades\Redirect;

class KhachhangController extends Controller
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

    //Frontend
  
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
        Session::flash('message','Đăng ký tài khoản thành công, mời bạn đăng nhập');
        return Redirect::to('/login');
    }

    public function trangcanhan($ma_khach_hang){
        $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        $data1=khachhang::where('ma_khach_hang',$ma_khach_hang)->get();
        return view('trangchu.trangcanhan')->with('soluong',$soluong)->with('loaiqua',$loaiqua)->with('thongtinkh',$data1);
    }

    public function capnhatthongtinkh(Request $request)
    {
        // $soluong = Cart::content()->count();
        // $loaiqua =loaiqua::all();  
        $data1=khachhang::where('ma_khach_hang',$request->idkh)->update([
            'kh_ten'=>$request->tenkh,
            'kh_email'=>$request->emailkh,
            'kh_sdt'=>$request->sdtkh,
            'kh_diachi'=>$request->diachikh    
        ]);
        Session::flash('message1','Cập nhật thông tin khách hàng thành công');
        return Redirect::back();
    } 


}
