<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class Sanpham extends Controller
{
//     public function AuthLogin(){
//         $ma_adm = Session::get('ma_adm');
//         if($ma_adm){
//             return Redirect::to('dashboard');
//         }else{
//             return Redirect::to('admin')->send();
//         }
//     }
//     public function them_sanpham(){
//         $this->AuthLogin();
      
       
//         $loaiqua = DB::table('loai_qua')->orderby('ma_loai','desc')->get(); 
       

//         return view('admin.them_sanpham')->with('loaiqua',$loaiqua);
//     }
    
//     public function all_sanpham(){
//         $this->AuthLogin();
      
//     $all_sanpham = DB::table('qua')
//     ->join('loai_qua','loai_qua.ma_loai','=','qua.ma_loai')
   
//     ->orderby('qua.ma_qua','desc')->paginate(5);
//     $manager_sanpham  = view('admin.all_sanpham')->with('all_sanpham',$all_sanpham);
//     return view('admin.admin_layout')->with('admin.all_sanpham', $manager_sanpham);
    
    
    
        
//     }
//     public function save_sanpham(Request $request){
//         $this->AuthLogin();
        
//     	$data = array();
//        	$data['ma_loai'] = $request->loaiqua;
//         $data['ten_qua'] = $request->ten_qua;
//         $data['gia_qua'] = $request->gia_qua;
//         $data['hinh_anh_qua'] = $request->hinh_anh_qua;
//         $data['mo_ta_qua'] = $request->mo_ta_qua;
//         $data['tinh_trang_qua'] = $request->tinh_trang_qua;
       

//         DB::table('qua')->insert($data);
//     	Session::flash('message','Thêm sản phẩm thành công');
//         return redirect('them-sanpham');
//     }
//     public function edit_sanpham($ma_qua){
//         $this->AuthLogin();
//         $loai_qua = DB::table('loai_qua')->orderby('ma_loai','desc')->get();
//         $edit_sanpham = DB::table('qua')->where('ma_qua',$ma_qua)->get();

//         $manager_sanpham = view('admin.edit_sanpham')->with('edit_sanpham',$edit_sanpham)->with('loai_qua',$loai_qua);
//         $loaiqua = DB::table('loai_qua')->orderby('ma_loai','desc')->get(); 
       

      

//         return view('admin.admin_layout')->with('admin.edit_sanpham', $manager_sanpham);
//     }
//     public function update_sanpham(Request $request,$ma_qua){
//         $this->AuthLogin();
        
//         $data = array();
//         $data['ma_loai'] = $request->loaiqua;
//         $data['ten_qua'] = $request->ten_qua;
//         $data['gia_qua'] = $request->gia_qua;
//         $data['hinh_anh_qua'] = $request->hinh_anh_qua;
//         $data['mo_ta_qua'] = $request->mo_ta_qua;
//         $data['tinh_trang_qua'] = $request->tinh_trang_qua;
       

        
        
//         DB::table('qua')->where('ma_qua',$ma_qua)->update($data);
//         Session::flash('message','Cập nhật sản phẩm thành công');
//         return Redirect('all-sanpham');
        
        
// }
// public function delete_sanpham($ma_qua){
  
//     DB::table('qua')->where('ma_qua',$ma_qua)->delete();
//     Session::flash('message','Xóa sản phẩm thành công');
//     return Redirect('all-sanpham');
// }
// public function timkiem(Request $request){
    
//     $tucantim=$request->timkiem;
   
//     $all_sanpham = DB::table('qua')
//     ->join('loai_qua','loai_qua.ma_loai','=','qua.ma_loai')->where('ten_qua','like','%'.$tucantim.'%')->orWhere('gia_qua','like','%'.$tucantim.'%')->orWhere('ten_loai','like','%'.$tucantim.'%')
   
//     ->orderby('qua.ma_qua','desc')->paginate(5);


//     return view('admin.tim_kiem_sanpham')->with('timkiemsanpham',$all_sanpham);

             


// }
}

