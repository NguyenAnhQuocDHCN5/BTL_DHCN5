<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
class Tintuc extends Controller
{
    public function them_tintuc(){
        return view('admin.them_tintuc');
    }
    public function all_tintuc(){
    $all_tintuc = DB::table('tin_tuc')
    ->orderby('tin_tuc.ma_tin_tuc','desc')->paginate(5);
    $manager_tintuc  = view('admin.all_tintuc')->with('all_tintuc',$all_tintuc);
    return view('admin.admin_layout')->with('admin.all_tintuc', $manager_tintuc);
    
    
        
    }
    public function save_tintuc(Request $request){
       
    	$data = array();
       	
        $data['tieu_de'] = $request->tieu_de;
        $data['hinh_anh_tin_tuc'] = $request->hinh_anh_tin_tuc;
        $data['noi_dung_tin_tuc'] = $request->noi_dung_tin_tuc;
        $data['ngay_dang_tin_tuc'] = $request->ngay_dang_tin_tuc;
        

        DB::table('tin_tuc')->insert($data);
    	Session::flash('message','Thêm tin tức thành công');
        return view('admin.them_tintuc');
    } 
    public function edit_tintuc($ma_tin_tuc){
        
        $edit_tintuc = DB::table('tin_tuc')->where('ma_tin_tuc',$ma_tin_tuc)->get();

        $manager_tintuc = view('admin.edit_tintuc')->with('edit_tintuc',$edit_tintuc);

        return view('admin.admin_layout')->with('admin.edit_tintuc', $manager_tintuc);
    }
    public function update_tintuc(Request $request,$ma_tin_tuc){
        
        $data = array();
        $data['tieu_de'] = $request->tieu_de;
        $data['hinh_anh_tin_tuc'] = $request->hinh_anh_tin_tuc;
        $data['noi_dung_tin_tuc'] = $request->noi_dung_tin_tuc;
        $data['ngay_dang_tin_tuc'] = $request->ngay_dang_tin_tuc;

        
        
        DB::table('tin_tuc')->where('ma_tin_tuc',$ma_tin_tuc)->update($data);
        Session::flash('message','Cập nhật tin tức thành công');
        return Redirect('all-tintuc');
        
        
}
public function delete_tintuc($ma_tin_tuc){
  
    DB::table('tin_tuc')->where('ma_tin_tuc',$ma_tin_tuc)->delete();
    Session::flash('message','Xóa tin tức thành công');
    return Redirect('all-tintuc');
}
}


