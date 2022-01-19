<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
class Admin extends Controller
{
        
    
        public function all_admin(){
        $all_admin = DB::table('adm')
        ->orderby('adm.ma_adm','desc')->paginate(5);
        $manager_admin  = view('admin.all_admin')->with('all_admin',$all_admin);
        return view('admin.admin_layout')->with('admin.all_admin', $manager_admin);
        
}
public function save_admin(Request $request){
       
    $data = array();
    $data['ten_dn'] = $request->ten_dn;
    $data['mat_khau'] = $request->mat_khau;
    $data['ten_adm'] = $request->ten_adm;
    $data['sdt'] = $request->sdt;
    $data['dia_chi'] = $request->dia_chi;
   

    DB::table('adm')->insert($data);
    Session::flash('message','Thêm sản phẩm thành công');
    return view('admin.all_admin');
}
public function edit_admin($ma_adm){
        
    $edit_admin = DB::table('adm')->where('ma_adm',$ma_adm)->get();

    $manager_admin  = view('admin.edit_admin')->with('edit_admin',$edit_admin);

    return view('admin.admin_layout')->with('admin.edit_admin', $manager_admin);
}
public function update_admin(Request $request,$ma_adm){
    
    $data = array();
    $data['ten_dn'] = $request->ten_dn;
    $data['mat_khau'] = $request->mat_khau;
    $data['ten_adm'] = $request->ten_adm;
    $data['sdt'] = $request->sdt;
    $data['dia_chi'] = $request->dia_chi;
   
    
    
    DB::table('adm')->where('ma_adm',$ma_adm)->update($data);
    Session::flash('message','Cập nhật danh mục Admin thành công'); 
    return redirect('all-admin');
}
public function delete_admin($ma_adm){

    DB::table('adm')->where('ma_adm',$ma_adm)->delete();
    Session::flash('message','Xóa Admin thành công');
    return Redirect ('all-admin');
}
}
