
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
