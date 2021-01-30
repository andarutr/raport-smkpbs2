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

Route::get('/', 'RaportController@index');
Route::post('/check', 'RaportController@check')->name('check');

Route::get('/raport/{nisn}', 'RaportController@show');

Route::get('/login', 'Auth\\AuthController@index')->name('login');
Route::post('/login', 'Auth\\AuthController@login')->name('login.process');

Route::middleware('auth')->group(function(){
    Route::group(['prefix' => '/panel/admin'], function(){
        Route::get('/dashboard', 'Admin\\AdminController@index')->name('admin.dashboard');
        Route::get('/administrasi', 'Admin\\AdminController@administrasi')->name('admin.administrasi');
        Route::get('/search-administrasi', 'Admin\\SearchController@administrasi')->name('admin.search.administrasi');
        Route::get('/payment/{id}', 'Admin\\AdminController@payment')->name('admin.payment');
        Route::get('/cancel-payment/{id}', 'Admin\\AdminController@cancelPayment')->name('admin.cancel.payment');
        Route::get('/raport/list-raport', 'Admin\\AdminController@listRaport')->name('admin.list.raport');
        Route::get('/search-list-raport', 'Admin\\SearchController@listRaport')->name('admin.search.list.raport');
        Route::get('/tambah-raport', 'Admin\\AdminController@tambahRaport')->name('admin.tambah.raport');
        Route::post('/tambah-raport', 'Admin\\AdminController@tambah_raport')->name('admin.tambah_raport');
        Route::get('/kirim-raport', 'Admin\\AdminController@kirimRaport')->name('admin.kirim.raport');
        Route::get('/search-kirim-raport', 'Admin\\SearchController@kirimRaport')->name('admin.search.kirim.raport');
        Route::get('/upload-raport/{id}', 'Admin\\AdminController@uploadRaport')->name('admin.view.upload');
        Route::post('/upload-raport/{id}', 'Admin\\AdminController@kirim_raport')->name('admin.upload.raport');
        Route::get('/download-raport', 'Admin\\AdminController@downloadRaport')->name('admin.download.raport');
        Route::get('/search-download-raport', 'Admin\\SearchController@downloadRaport')->name('admin.search.download.raport');
        Route::get('/logout', 'Auth\\AuthController@logout')->name('admin.logout');
    });
});