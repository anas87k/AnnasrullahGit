<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('admin/routes', 'HomeController@admin')->middleware('auth:admin');
Route::get('/admin/home', 'Admin\Auth\AdminController@admin')->middleware('admin')->name('admin.home');
Route::get('/admin/{id_santri}/show', 'Admin\Auth\AdminController@edit')->middleware('admin')->name('admin.edit');
Route::get('/admin/logout', 'Admin\Auth\AdminController@logout')->middleware('admin')->name('admin.logout');
Route::get('/login/admin', 'Admin\Auth\LoginController@showLoginForm')->middleware('admin');
Route::post('/admin/login', 'Admin\Auth\LoginController@login')->middleware('admin')->name('admin.login');
Route::delete('/admin/{id_santri}/delete', 'Admin\Auth\AdminController@destroy')->middleware('admin')->name('admin.delete');

Route::get('/admin/ijin/keluar', 'Admin\Auth\IjinAdminController@ijinkeluar')->middleware('admin')->name('ijinkeluar');
Route::get('/admin/ijin/pulang', 'Admin\Auth\IjinAdminController@ijinpulang')->middleware('admin')->name('ijinpulang');



Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::resource('bayar', 'Admin\Auth\BayarController');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::resource('syahriyahs', 'AdminSyahriyahController');
});
Route::get('/admin/syahriyah/add', 'AdminSyahriyahController@showtambah')->middleware('admin')->name('syahriyahshow');
Route::post('/admin/syahriyah/simpan', 'AdminSyahriyahController@simpan')->middleware('admin')->name('syahriyahadd');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/daftar/bayar', 'DaftarController@showbayar')->name('bayar');
Route::post('/daftar/add', 'DaftarController@adddata')->name('add');
Route::post('/daftar/checkid', 'DaftarController@checkid')->name('checkid');
Route::get('/daftar/check', 'DaftarController@checkbayar')->name('checkbayar');
Route::get('/daftar/bayar', 'DaftarController@showbayar')->name('bayar');
Route::get('/daftar/c', 'DaftarController@checking')->name('check');
Route::get('/daftar/checkbayar', 'DaftarController@checkbayars')->name('checkbayars');
Route::post('/bayar', 'DaftarController@bayar')->name('bayaro');
Route::get('/admin/daftar', 'DaftarController@admindaftar')->name('admindaftar');

Route::get('/member/syahriyah/bayar', 'SyahriyahController@showbayar')->name('showbayar');
Route::post('/member/syahriyah/bayar/{id_syahriyah}', 'SyahriyahController@bayar')->name('bayar.syahriyah');

Route::get('/annasrullah/tentang', 'IjinController@tentang')->name('tentang');
Route::post('/ijin', 'IjinController@addijin')->name('addijin');
Route::get('/ijin/absen', 'IjinController@absenijin')->name('absenijin');
Route::get('/check/ijin', 'IjinController@checkijin')->name('checkijin');
Route::get('/ijin/pulang', 'IjinController@pulang')->name('ijin.pulang');
Route::post('/ijin/pulang/add', 'IjinController@ijinpulang')->name('addpulang');
Route::get('/check/pulang', 'IjinController@cekpulang')->name('checkpulang');
Route::group(['prefix' => 'member', 'middleware' => ['auth']], function () {
    Route::resource('daftar', 'DaftarController');
});
Route::group(['prefix' => 'member', 'middleware' => ['auth']], function () {
    Route::resource('syahriyah', 'SyahriyahController');
});

Route::group(['prefix' => 'member', 'middleware' => ['auth']], function () {
    Route::resource('ijin', 'IjinController');
});

Route::get('/syahriyah', 'SyahriyahController@datasyahriyah')->name('syahriyah');





