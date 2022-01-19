<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\loaiqua;
use App\Models\qua;
use App\Models\donhang;
use App\Models\tintuc;
use App\Models\chitietdondathang;
use App\Models\khachhang;
use App\Models\binhluan;
use App\Models\lienhe;
use Cart;
session_start();

class HomeController extends Controller
{
    public function index()
    {
        $loaiqua =loaiqua::all();  
        $qua =qua::paginate(6);
        $soluong = Cart::content()->count();
        return view('trangchu.home')->with('loaiqua',$loaiqua)->with('qua',$qua)->with('soluong',$soluong);
    }
    public function dangnhaptrangchu()
    {
        $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        return view('trangchu.login_register')->with('soluong',$soluong)->with('loaiqua',$loaiqua);
    }
    public function dangxuattrangchu(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }
    public function trangcanhan(){
        return view('trangchu.trangcanhan');
    }
    public function lienhe(){
        $loaiqua =loaiqua::all();  
        $soluong = Cart::content()->count();
        return view('trangchu.lienhe')->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }
    public function guilienhe(Request $request){
        $validatedData = $request->validate([
            'ten_lienhe' => ['required'],
            'email_lienhe' => ['required'],
            'tieude_lienhe' => ['required'], 
            'noidung_lienhe' => ['required'],
            'sdt_lienhe' => ['required'],
        ]);
        $data =$request->all();
        $data1=lienhe::create([
            'ten_nguoi_lien_he'=>$data['ten_lienhe'],
            'email_nguoi_lien_he'=>$data['email_lienhe'],
            'tieude_lien_he'=>$data['tieude_lienhe'],
            'sdt_nguoi_lien_he'=>$data['sdt_lienhe'],
            'noi_dung'=>$data['noidung_lienhe'],
        ]);
        return Redirect::to('/lienhe');
    }
    public function chitietsanpham($ma_qua){
        $loaiqua =loaiqua::all();  
        $chitietqua = qua::where('ma_qua',$ma_qua)->get();
        foreach($chitietqua as $key =>$value){
            $maqua=$value->ma_qua;
        }
        $sanphamlienquan = qua::whereNotIn('ma_qua',[$maqua])->paginate(3);
        $soluong = Cart::content()->count();
        return view('trangchu.chitietsanpham')->with('loaiqua',$loaiqua)->with('sanphamchitiet',$chitietqua)->with('sanphamlienquan',$sanphamlienquan)->with('soluong',$soluong);
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

    public function tintuc()
    {
        $tintuc = tintuc::paginate(4);
        $soluong = Cart::content()->count();
        $loaiqua =loaiqua::all();  
        return view('trangchu.tintuc')->with('tintuc',$tintuc)->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }

    public function chitiettintuc($ma_tin_tuc)
    {
        $chitiettintuc = tintuc::where('ma_tin_tuc',$ma_tin_tuc)->get();
        $soluong = Cart::content()->count();
        $loaiqua =loaiqua::all();  
        return view('trangchu.chitiettintuc')->with('chitiettintuc',$chitiettintuc)->with('soluong',$soluong);
    }  
    public function giohang()
    {
        $soluong = Cart::content()->count();
        $loaiqua =loaiqua::all();  
        return view('trangchu.giohang')->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }       
    public function chitietgiohang(Request $request)
    {
        $idsanpham = $request->sanphamid;
        $soluong = $request->soluong;
        $listgiohang = qua::where('ma_qua',$idsanpham)->first();
        $data['id'] = $listgiohang->ma_qua;
        $data['qty'] = $soluong;
        $data['name'] = $listgiohang->ten_qua;
        $data['price'] = $listgiohang->gia_qua;
        $data['weight'] = $soluong;
        $data['options']['image'] = $listgiohang->hinh_anh_qua;
        Cart::add($data);
        $soluong = Cart::content()->count();
        return Redirect::to('/showgiohang')->with('soluong',$soluong);
    }         
    public function chitietgiohang1($ma_qua)
    {
        $sanpham = qua::where('ma_qua',$ma_qua)->first();
        $data['id'] = $sanpham->ma_qua;
        $data['qty'] = "1";
        $data['name'] = $sanpham->ten_qua;
        $data['price'] = $sanpham->gia_qua;
        $data['weight'] = '1';
        $data['options']['image'] = $sanpham->hinh_anh_qua;
        Cart::add($data);
        return Redirect::to('/showgiohang');
    }   
    public function showgiohang()
    {
        $loaiqua =loaiqua::all();  
        $soluong = Cart::content()->count();
        return view('trangchu.giohang')->with('soluong',$soluong)->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }
    public function dangkikh1()
    {   $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        return view('trangchu.dangkikh')->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    }
    public function xoasanpham($rowId)
    {
        Cart::remove($rowId);
         return Redirect::to('/showgiohang');
    }
    public function congsl($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId,$row->qty + 1);
        return Redirect::to('/showgiohang');
    }
    public function checkout()  
    {
        $soluong = Cart::content()->count();
        $loaiqua =loaiqua::all();  
        return view('trangchu.thanhtoan')->with('loaiqua',$loaiqua)->with('soluong',$soluong);
    } 
    public function xacnhanthanhtoan(Request $request)
    {
        
        $validatedData = $request->validate([
            'ten_nguoinhan' => ['required',],
            'email_nguoinhan' => ['required'],
            'sdt_nguoinhan' => ['required','numeric'], 
            'diachi_nguoinhan' => ['required'],
            'ghichu_nguoinhan' => ['max:255'],
            'payment_option' =>['required'],
        ]);
        $data =$request->all();

        if($data['payment_option']=='1'){
            $data['payment_option']="Thanh toán khi giao hàng";
        }elseif($data['payment_option']=='2'){
            $data['payment_option']="Chuyển khoản qua ngân hàng";
        }elseif($data['payment_option']=='3'){
            $data['payment_option']="Chuyển khoản qua momo";
        };
        $date = date('Y-m-d H:i:s');
        $id_donhang = donhang::insertGetId([
            'ten_nguoi_nhan'=>$data['ten_nguoinhan'],
            'email_nguoi_nhan'=>$data['email_nguoinhan'],
            'sdt_nguoi_nhan'=>$data['sdt_nguoinhan'],
            'dia_chi_nguoi_nhan'=>$data['diachi_nguoinhan'],
            'ghi_chu_dat_hang'=>$data['ghichu_nguoinhan'],
            'hinhthuc_thanhtoan'=>$data['send_order_place'],
            'tong_tien'=>Cart::total(),
            'tinh_trang_dat_hang'=>'Đang xử lý',
            'ngay_dat'=>date('Y-m-d H:i:s'),
        ]);     

        $content = Cart::content();
        foreach($content as $sanpham){
            $thanhtien = $sanpham->price * $sanpham->qty;
            chitietdondathang::insert([
                'ma_qua'=>$sanpham->id,
                'ma_don_dat_hang'=>$id_donhang,
                'so_luong'=>$sanpham->qty,
                'gia'=>$sanpham->price,
                'thanh_tien'=> $thanhtien   
            ]);
        }
        Cart::destroy();
        return Redirect::to('/trang-chu');
    } 
    public function tatcasanpham()  
    {
        $qua =qua::all(); 
        $loaiqua =loaiqua::all(); 
        $soluong = Cart::content()->count();
        return view('trangchu.tatca_sanpham')->with('loaiqua',$loaiqua)->with('qua',$qua)->with('soluong',$soluong);
    } 
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
    public function loaisanpham($ma_loai)
    {
        $loaiqua =loaiqua::all();  
        $listsanpham =DB::table('qua')->join('loai_qua','qua.ma_loai','=','loai_qua.ma_loai')->where('loai_qua.ma_loai',$ma_loai)->limit(6)->get();
        $tenloai = loaiqua::where('ma_loai',$ma_loai)->get();
        $ma_loai_qua=$ma_loai;
        $soluong = Cart::content()->count();
        return view('trangchu.danhmucsanpham')->with('loaiqua',$loaiqua)->with('listsanpham',$listsanpham)->with('tenloai',$tenloai)->with('ma_loai_qua',$ma_loai_qua)->with('soluong',$soluong);
    } 
    public function sanphamtheoloai($ma_loai)
    {
        $loaiqua =loaiqua::all();  
        $listsanpham =DB::table('qua')->join('loai_qua','qua.ma_loai','=','loai_qua.ma_loai')->where('loai_qua.ma_loai',$ma_loai)->get();
        $tenloai = loaiqua::where('ma_loai',$ma_loai)->get();
        $soluong = Cart::content()->count();
        return view('trangchu.sanphamtheoloai')->with('loaiqua',$loaiqua)->with('listsanpham',$listsanpham)->with('tenloai',$tenloai)->with('soluong',$soluong);
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
