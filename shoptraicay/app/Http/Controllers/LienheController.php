<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\lienhe;
use App\Models\loaiqua;
use App\Models\qua;
use Cart;
class LienheController extends Controller
{
    public function AuthLogin(){
        $ma_adm = Session::get('ma_adm');
        if($ma_adm){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function all_lienhe(){
        $this->AuthLogin();
        $all_lienhe = DB::table('lien_he')
        ->orderby('lien_he.ma_lien_he','desc')->paginate(5);
        $manager_lienhe  = view('admin.all_lienhe')->with('all_lienhe',$all_lienhe);
        return view('admin.admin_layout')->with('admin.all_lienhe', $manager_lienhe);
        }
        
        public function delete_lienhe($ma_lien_he){
  
            DB::table('lien_he')->where('ma_lien_he',$ma_lien_he)->delete();
            Session::flash('message','Xóa liên hệ thành công');
            return Redirect ('all-lienhe');
        }

    //Frontend
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
            'ma_khach_hang'=>$request->makh,
        ]);
        Session::flash('message_lienhe','Gửi thành công chúng tôi sẽ liên hệ tới bạn trong thời gian sớm nhất');
        return Redirect::to('/lienhe');
    }
}
