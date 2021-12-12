
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


//frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/login','HomeController@dangnhaptrangchu');
Route::get('/logout','HomeController@dangxuattrangchu');
Route::post('/dangkikhachhang','HomeController@dangkikh')->name('dangkikh');
Route::post('/dangnhapkhachhang','HomeController@dangnhapkh')->name('dangnhapkh');
