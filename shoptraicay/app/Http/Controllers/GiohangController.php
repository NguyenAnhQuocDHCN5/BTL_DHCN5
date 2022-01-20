<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\chitietdondathang;
use App\Models\loaiqua;
use App\Models\qua;
use App\Models\donhang;
use Illuminate\Support\Facades\Redirect;
class GiohangController extends Controller
{
    //Frontend
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
            'hinhthuc_thanhtoan'=>$data['payment_option'],
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
}
