
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
Route::get('/logout-admin','AdminController@log_out');
Route::get('/register','AdminController@register_ne');
Route::post('/dang_ki_adm','AdminController@dangki')->name('dangki_adm');
//Category Product
Route::get('/add-category-product','CategoryProductController@add_category_product');
Route::get('/all-category-product','CategoryProductController@all_category_product');
Route::post('/save-category-product','CategoryProductController@save_category_product');
Route::post('/update-category-product/{ma_loai}','CategoryProductController@update_category_product');
Route::get('/edit-category-product/{ma_loai}','CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{ma_loai}','CategoryProductController@delete_category_product');
// sản phẩm
Route::get('/them-sanpham','SanphamController@them_sanpham');
Route::get('/all-sanpham','SanphamController@all_sanpham');
Route::post('/save-sanpham','SanphamController@save_sanpham');
Route::post('/update-sanpham/{ma_qua}','SanphamController@update_sanpham');
Route::get('/edit-sanpham/{ma_qua}','SanphamController@edit_sanpham');
Route::get('/delete-sanpham/{ma_qua}','SanphamController@delete_sanpham');
// tìm kiếm sản phẩm
Route::post('/tim-kiem-sanpham','SanphamController@timkiem');

// khách hàng
Route::get('/all-khachhang','KhachhangController@all_khachhang');
Route::post('/save-khachhang','KhachhangController@save_khachhang');
Route::post('/update-khachhang/{ma_khach_hang}','KhachhangController@update_khachhang');
Route::get('/edit-khachhang/{ma_khach_hang}','KhachhangController@edit_khachhang');
Route::get('/delete-khachhang/{ma_khach_hang}','KhachhangController@delete_khachhang');
// đơn đặt hàng
Route::get('/all-dondathang','DondathangController@all_dondathang');
Route::post('/save-dondathang','DondathangController@save_dondathang');
Route::post('/update-dondathang/{ma_don_dat_hang}','DondathangController@update_dondathang');
Route::get('/don-hang/{ma_qua}','DondathangController@don_hang');
Route::get('/delete-dondathang/{ma_don_dat_hang}','DondathangController@delete_dondathang');

// tin tức
Route::get('/them-tintuc','TintucController@them_tintuc');
Route::get('/all-tintuc','TintucController@all_tintuc');
Route::post('/save-tintuc','TintucController@save_tintuc');
Route::post('/update-tintuc/{ma_tin_tuc}','TintucController@update_tintuc');
Route::get('/edit-tintuc/{ma_tin_tuc}','TintucController@edit_tintuc');
Route::get('/delete-tintuc/{ma_tin_tuc}','TintucController@delete_tintuc');
// liên hệ
Route::get('/all-lienhe','LienheController@all_lienhe');
Route::post('/save-lienhe','LienheController@save_lienhe');
Route::post('/update-lienhe','LienheController@update_lienhe');
Route::get('/delete-lienhe/{ma_lien_he}','LienheController@delete_lienhe');
// bình luận
Route::get('/all-binhluan','BinhluanController@all_binhluan');
Route::post('/save-binhluan','BinhluanController@save_binhluan');
Route::post('/update-binhluan','BinhluanController@update_binhluan');
Route::get('/delete-binhluan/{ma_binhluan}','BinhluanController@delete_binhluan');



// Admin
Route::get('/all-admin','QuanlyadmController@all_admin');
Route::post('/save-admin','QuanlyadmController@save_admin');
Route::post('/update-admin/{ma_adm}','QuanlyadmController@update_admin');
Route::get('/edit-admin/{ma_adm}','QuanlyadmController@edit_admin');
Route::get('/delete-admin/{ma_adm}','QuanlyadmController@delete_admin');

//Frontend
//Trang chu
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/login','HomeController@dangnhaptrangchu');
Route::get('/logout','HomeController@dangxuattrangchu');
Route::get('/dangkikh1','HomeController@dangkikh1');
Route::post('/timkiem','HomeController@timkiem');

//Khach hang
Route::post('/dangkikhachhang','KhachhangController@dangkikh')->name('dangkikh');
Route::post('/dangnhapkhachhang','KhachhangController@dangnhapkh')->name('dangnhapkh');
Route::get('/trangcanhan/{ma_khach_hang}','KhachhangController@trangcanhan');
Route::post('/capnhapthongtinkhachhang','KhachhangController@capnhatthongtinkh');

//San pham
Route::get('/tatcasanpham','SanphamController@tatcasanpham');
Route::get('/loaisanpham/{ma_loai}','SanphamController@loaisanpham');
Route::get('/sanphamtheoloai/{ma_loai}','SanphamController@sanphamtheoloai');
Route::get('/chitietsanpham/{ma_qua}','SanphamController@chitietsanpham');

//Gio hang
Route::get('/giohang','GiohangController@giohang');
Route::post('/chitietgiohang','GiohangController@chitietgiohang');
Route::get('/chitietgiohang1/{ma_qua}','GiohangController@chitietgiohang1');
Route::get('/showgiohang','GiohangController@showgiohang');
Route::get('/xoasanpham/{rowId}','GiohangController@xoasanpham');
Route::post('/capnhapsoluong','GiohangController@capnhatsoluong');
Route::get('/thanhtoan','GiohangController@checkout');
Route::post('/xacnhan','GiohangController@xacnhanthanhtoan')->name('xacnhan1');
Route::get('/camon','GiohangController@camon');

//Tintuc
Route::get('/tintuc','TintucController@tintuc');
Route::get('/chitiettintuc/{ma_tin_tuc}','TintucController@chitiettintuc');

//Lienhe
Route::get('/lienhe','LienheController@lienhe');
Route::post('/guilienhe','LienheController@guilienhe');

//Binhluan
Route::post('/binhluan','BinhluanController@binhluan');


