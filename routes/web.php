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
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin', 'Admin\AdminController@index');

    Route::get('edit/{id}', 'Admin\ProdukController@index');
    Route::post('edit/{id}', 'Admin\ProdukController@update');
    Route::delete('edit/{id}', 'Admin\ProdukController@delete');

    Route::get('/add', 'Admin\AddProdukController@add')->name('admin.add');
    Route::post('/add', 'Admin\AddProdukController@store');

    Route::get('pesanan', 'Admin\PesananController@index');
    Route::get('pesanan/{id}', 'Admin\PesananController@detail');

    Route::get('editpesanan/{id}', 'Admin\editPesananController@index');
    Route::post('editpesanan/{id}', 'Admin\editPesananController@update');
});

Route::get('faqs', function () {
    return view('faqs');
});