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

Route::get('/login', 'Auth\\AuthController@index');
Route::post('/login', 'Auth\\AuthController@login')->name('login.process');

Route::get('/panel/admin/dashboard', 'Admin\\AdminController@index')->name('admin.dashboard');
