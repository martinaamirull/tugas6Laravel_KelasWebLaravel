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

Route::get('/', 'IndexController@halamanutama');
Route::get('/form', 'AuthController@signup');
Route::post('/kirim', 'AuthController@kirim');

// Route::get('/master',function(){
//     return view('layout.master');
// });
Route::get('/data-table', 'IndexController@table');

//CRUD CASR
//menuju form cast
Route::get('/cast/create','castController@create');

//untuk mengirim inputan ke database
Route::post('/cast','castController@store');

//read data
//untuk menampilkan database di web
Route::get('/cast','castController@index');
Route::get('/cast/{cast_id}','castController@show');