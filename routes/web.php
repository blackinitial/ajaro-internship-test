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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/add', 'add');
Route::view('/edit', 'edit');

Route::get('/', 'BarangController@index');
Route::post('/store', 'BarangController@store');
Route::get('/edit/{id}', 'BarangController@edit');
Route::post('/update', 'BarangController@update');
Route::get('/delete/{id}', 'BarangController@destroy');
