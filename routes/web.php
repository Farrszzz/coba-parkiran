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

Route::get('/create', function () {
    return view('tambahUser');
});
Route::get('/ ', 'App\Http\Controllers\AdminController@index');
Route::get('/tambah', 'App\Http\Controllers\AdminController@create');
Route::get('user/add_user', 'App\Http\Controllers\AdminController@add_user')->name('add_user');
Route::get('user/edit/{id}','App\Http\Controllers\AdminController@edit_user')->name('edit_user');
Route::get('user/update','App\Http\Controllers\AdminController@edit_user_aksi')->name('edit_user_aksi');
Route::get('/login', '\App\Http\Controllers\ParkirController@create');
Route::get('/test', function () {
    return view('test');
});