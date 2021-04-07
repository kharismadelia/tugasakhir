<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index', function () {
	return view('index');
});
// Route::get('login', function () {
// 	return view('login');
// });


Route::get('register', function () {
	return view('register');
});

//admin

Route::get('admin_dashboard', function () { 
	return view('admin/dashboard');
});

Route::get('admin_daftar', function () {
	return view('admin/daftar');
});

 // Route::get('admin_toko', function () {
 // 	return view('admin/toko');
 // });

Route::get('admin_produk', function () {
	return view('admin/produk');
});

Route::get('admin_billing', function () {
	return view('admin/billing');
});

Route::get('admin_bank', function () {
	return view('admin/bank');
});



Route::get('ubahproduk', function () {
	return view('admin/ubahproduk');
});




//untuk user 
Route::get('dashboard', function () {
	return view('user/dashboard');
});

Route::get('daftar', function () {
	return view('user/daftar');
});

Route::get('toko', function () {
	return view('user/toko');
});

Route::get('produk', function () {
	return view('user/produk');
});

Route::get('billing', function () {
	return view('user/billing');
});

Route::get('detailtransaksi', function () {
	return view('user/detailtransaksi');
});

Route::get('transaksiproduk', function () {
	return view('user/transaksiproduk');
});

Route::get('transaksialamat', function () {
	return view('user/transaksialamat');
});

Route::get('/login','AuthController@index');
Route::post('/admin_dashboard','AuthController@login');
Route::get('/logout','AuthController@logout');

//routeCRUD
Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
	Route::get('/admin_toko','ProdukController@index');
	Route::get('/admin_toko/tambahproduk','ProdukController@create');
	Route::post('/admin_toko/simpanproduk','ProdukController@store');
	Route::get('/admin_toko/{id}/edit','ProdukController@edit');
	Route::post('/admin_toko/{id}/update','ProdukController@update');
	Route::get('/admin_toko/{id}/delete','ProdukController@delete');

	Route::get('/pegawai','PegawaiController@index');
	Route::get('/pegawai/tambahpegawai','PegawaiController@create');
	Route::post('/pegawai/simpanpegawai','PegawaiController@store');
	Route::get('/pegawai/{id_pegawai}/edit','PegawaiController@edit');
	Route::post('/pegawai/{id_pegawai}/update','PegawaiController@update');
	Route::get('/pegawai/{id_pegawai}/delete','PegawaiController@delete');

	Route::get('/admin_billing', 'InvoiceController@ada')->name('invoice.ada');
	Route::get('/admin_dashboard', 'InvoiceController@hasil')->name('invoice.hasil');
});

Route::group(['middleware' => ['auth', 'checkRole:pegawai']], function(){
	Route::get('/toko','BarangController@tampil');

	Route::get('/customer','CustomerController@index');
	Route::get('/customer/tambahcustomer','CustomerController@create');
	Route::post('/customer/simpancustomer','CustomerController@store');
	Route::get('/customer/{id}/edit','CustomerController@edit');
	Route::post('/customer/{id}/update','CustomerController@update');
	Route::get('/customer/{id}/delete','CustomerController@delete');
	//ROUTE UNTUK HALAMAN INVOICE
    Route::get('/invoice', 'InvoiceController@create')->name('invoice.create');
    //ROUTE UNTUK MENG-HANDLE DATA YANG DIKIRIM
	Route::post('/editinvoice', 'InvoiceController@save')->name('invoice.store');
	Route::get('/invoice/{id}/edit', 'InvoiceController@edit')->name('invoice.edit');
	Route::put('/invoice/{id}/update', 'InvoiceController@update')->name('invoice.update');
	//biliing
	Route::get('/billing', 'InvoiceController@index')->name('invoice.index');
	Route::get('/dashboard', 'InvoiceController@tampil')->name('invoice.tampil');
	Route::get('print/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
});



