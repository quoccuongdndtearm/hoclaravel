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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pom', function () {
    return view('Dashboard.Dash');
});
Route::get('ton', function () {
    return view('Customer.Custom');
});
Route::get('donhang', function () {
    return view('Donhang.Don');
});
Route::get('tongquan', function () {
    return view('TongQuan.Tong');
});
Route::get('thiet-lap', function () {
    return view('ThietLap.tl');
});
Route::get('san-pham', function () {
    return view('SanPham.sp');
});
Route::get('dieu-hanh', function () {
    return view('DieuHanh.dh_view');
});