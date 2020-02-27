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
    return view('beranda.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => ['cekuser','auth'] ], function()
{   
    Route::get('/','UserController@index')->name('user');  
    Route::get('/loker/detail/{id}','UserController@detailLoker')->name('loker-detail');  
	Route::get('/loker/detail-loker/{id}','UserController@LokerDetail')->name('loker-detail'); 
	Route::post('/loker/detail-loker/add','UserController@addLamaran')->name('add-lamaran');
	Route::get('/lamaran','UserController@daftarLamaran')->name('lamaran'); 
});


Route::group(['prefix' => 'admin', 'middleware' => ['cekadmin','auth'] ], function()
{   
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/company','AdminController@Company')->name('company-add');
    Route::get('/company/edit/{id}','AdminController@editCompany')->name('company-edit');
    Route::post('/company/put','AdminController@putCompany')->name('company-put');
    Route::post('/add-company','AdminController@addCompany')->name('add-company');
    Route::get('/company/loker/{id}','AdminController@addLoker')->name('add-loker');
    Route::post('/add-loker','AdminController@tambahLoker')->name('tambah-loker');
    Route::get('/daftar-loker','AdminController@daftarLoker')->name('daftar-loker');
    Route::get('/edit-loker/{id}','AdminController@editLoker')->name('edit-loker');
    Route::post('/put-loker','AdminController@putLoker')->name('put-loker');
    Route::get('/hapus-loker/{id}','AdminController@deleteLoker')->name('delete-loker');
    Route::get('/daftar-lamaran','AdminController@daftarLamaran')->name('daftar-lamaran');
    Route::get('/edit-lamaran/{id}','AdminController@editLamaran')->name('edit-lamaran');
     Route::post('/put-lamaran/','AdminController@putLamaran')->name('put-lamaran');
});

