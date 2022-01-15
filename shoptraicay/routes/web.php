
<?php
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin','AdminController@index')->name('login');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@log_out');
Route::get('/register','AdminController@register_ne');
Route::post('/dang_ki_adm','AdminController@dangki')->name('dangki_adm');
//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{ma_loai}','CategoryProduct@update_category_product');
Route::get('/edit-category-product/{ma_loai}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{ma_loai}','CategoryProduct@delete_category_product');
// sản phẩm
Route::get('/them-sanpham','Sanpham@them_sanpham');
Route::get('/all-sanpham','Sanpham@all_sanpham');
Route::post('/save-sanpham','Sanpham@save_sanpham');
Route::post('/update-sanpham/{ma_qua}','Sanpham@update_sanpham');
Route::get('/edit-sanpham/{ma_qua}','Sanpham@edit_sanpham');
Route::get('/delete-sanpham/{ma_qua}','Sanpham@delete_sanpham');
// khách hàng
Route::get('/all-khachhang','Khachhang@all_khachhang');
Route::post('/save-khachhang','Khachhang@save_khachhang');
Route::post('/update-khachhang/{ma_khach_hang}','Khachhang@update_khachhang');
Route::get('/edit-khachhang/{ma_khach_hang}','Khachhang@edit_khachhang');
Route::get('/delete-khachhang/{ma_khach_hang}','Khachhang@delete_khachhang');
// đơn đặt hàng
Route::get('/all-dondathang','Dondathang@all_dondathang');
Route::post('/save-dondathang','Dondathang@save_dondathang');
Route::post('/update-dondathang','Dondathang@update_dondathang');
// tin tức
Route::get('/them-tintuc','Tintuc@them_tintuc');
Route::get('/all-tintuc','Tintuc@all_tintuc');
Route::post('/save-tintuc','Tintuc@save_tintuc');
Route::post('/update-tintuc/{ma_tin_tuc}','Tintuc@update_tintuc');
Route::get('/edit-tintuc/{ma_tin_tuc}','Tintuc@edit_tintuc');
Route::get('/delete-tintuc/{ma_tin_tuc}','Tintuc@delete_tintuc');
// liên hệ
Route::get('/all-lienhe','Lienhe@all_lienhe');
Route::post('/save-lienhe','Lienhe@save_lienhe');
Route::post('/update-lienhe','Lienhe@update_lienhe');
Route::get('/delete-lienhe/{ma_lien_he}','Lienhe@delete_lienhe');

// Admin
Route::get('/all-admin','Admin@all_admin');
Route::post('/save-admin','Admin@save_admin');
Route::post('/update-admin/{ma_adm}','Admin@update_admin');
Route::get('/edit-admin/{ma_adm}','Admin@edit_admin');
Route::get('/delete-admin/{ma_adm}','Admin@delete_admin');


//trangchu
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/login','HomeController@dangnhaptrangchu');
Route::get('/logout','HomeController@dangxuattrangchu');
Route::post('/dangkikhachhang','HomeController@dangkikh')->name('dangkikh');
Route::post('/dangnhapkhachhang','HomeController@dangnhapkh')->name('dangnhapkh');
Route::get('/trangcanhan','HomeController@trangcanhan');
Route::get('/lienhe','HomeController@lienhe');
Route::get('/tintuc','HomeController@tintuc');
Route::get('/chitiettintuc','HomeController@chitiettintuc');
Route::get('/chitietsanpham/{ma_qua}','HomeController@chitietsanpham');
Route::get('/giohang','HomeController@giohang');
Route::post('/chitietgiohang','HomeController@chitietgiohang');
Route::get('/showgiohang','HomeController@showgiohang');
Route::get('/xoasanpham/{rowId}','HomeController@xoasanpham');
Route::get('/capnhapsoluong/{rowId}','HomeController@capnhatsoluong');
Route::get('/congsl/{rowId}','HomeController@congsl');
Route::get('/trusl/{rowId}','HomeController@trusl');
Route::get('/thanhtoan','HomeController@checkout');
