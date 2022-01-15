<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }
    public function all_category_product(){
    	$all_category_product = DB::table('loai_qua')->get();
    	$manager_category_product  = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	return view('admin.admin_layout')->with('admin.all_category_product', $manager_category_product);


    }
    public function save_category_product(Request $request){
       
    	$data = array();
    	$data['ten_loai'] = $request->ten_loai;
    

        DB::table('loai_qua')->insert($data);
    	Session::flash('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('/add-category-product');
    }
    
    public function edit_category_product($ma_loai){
        
        $edit_category_product = DB::table('loai_qua')->where('ma_loai',$ma_loai)->get();

        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

        return view('admin.admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }
    public function update_category_product(Request $request,$ma_loai){
        
        $data = array();
        $data['ten_loai'] = $request->ten_loai;
        
        
        DB::table('loai_qua')->where('ma_loai',$ma_loai)->update($data);
        Session::flash('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
        
        
}
public function delete_category_product($ma_loai){
  
    DB::table('loai_qua')->where('ma_loai',$ma_loai)->delete();
    Session::flash('message','Xóa danh mục sản phẩm thành công');
    return Redirect::to('all-category-product');
}
}