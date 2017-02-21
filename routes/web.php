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
	$data = \App\ruangtamu::all();
    return view('home')->with('data',$data);

});
Route::get('login','Auth\LoginController@getLogin');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@getLogout');


Route::get('about', 'FurnitureController@about');
Route::get('blog', 'FurnitureController@blog');
Route::get('kontak', 'FurnitureController@kontak');

Route::get('pesan/detail/{id}', 'FurnitureController@detailpesan');


Route::get('admin/datapesanan', 'FurnitureController@datapesanan');
Route::get('admin/databarang', 'FurnitureController@databarang');
Route::get('admin/inputbarang', 'FurnitureController@inputbarang');
Route::get('admin/home', 'FurnitureController@homeadmin');
Route::get('admin/detail/{id}', 'FurnitureController@detailadmin');
Route::get('admin/detailpesanan/{id}', 'FurnitureController@detailpesanan');
Route::get('admin/detailpemesan/{id}', 'FurnitureController@detailpemesan');
Route::get('pesanfurniture', 'FurnitureController@pesanfurniture');
Route::get('admin/laporanpemesan/{id}', 'FurnitureController@laporanpemesan');
Route::get('admin/laporan/{id}', 'FurnitureController@laporan');
Route::get('admin/laporancontoh/{id}', 'FurnitureController@laporancontoh');
Route::get('admin/editstatuspm/{id}', 'FurnitureController@editstatuspm');
Route::get('admin/editstatusps/{id}', 'FurnitureController@editstatusps');

Route::get('admin/deleter/{id}', 'ProsesController@deleter');
Route::get('admin/deletep/{id}', 'ProsesController@deletep');
Route::get('admin/deletepemesan/{id}', 'ProsesController@deletepemesan');
Route::get('pesanfurniture', 'FurnitureController@pesanfurniture');
Route::get('listfurniture', 'FurnitureController@listfurniture');
Route::get('admin/editr/{id}', 'FurnitureController@editbarang');
Route::get('pesan/mesan/{id}', 'FurnitureController@mesan');
Route::post('pesan/mesan','ProsesController@mesan');
Route::get('admin/datapemesan', 'FurnitureController@datapemesan');

Route::POST('ruangtamu', 'ProsesController@ruangtamu');
Route::POST('pesanbarang', 'ProsesController@pesanbarang');
Route::post('admin/edit/{id}', 'ProsesController@edit');
Route::POST('admin/editstatuspm/{id}', 'ProsesController@editstatuspm');
Route::post('admin/editstatusps/{id}', 'ProsesController@editstatusps');
Auth::routes();

Route::get('/home', 'HomeController@index');
