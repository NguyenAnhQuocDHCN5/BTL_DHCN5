<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class Lienhe extends Controller
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
}
