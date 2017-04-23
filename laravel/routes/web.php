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

Route::get('user/{id}/{name}', function ($id, $name) {
    return view('home.index', compact('id', 'name'));
});

Route::get('/belajar', 'BelajarController@index');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/belajar/html', 'BelajarController@getPage');
Route::get('/one-to-one', 'BelajarController@getOne');
Route::get('/profile/{nama}', 'BelajarController@hasOne');
Route::get('/one-to-many', 'BelajarController@getOneMany');
Route::get('/many-to-one', 'BelajarController@getManyOne');

Route::group(['prefix' => 'kendaraan'], function(){
 
	Route::get('/', 'KendaraanController@index');
	Route::get('/create', 'KendaraanController@create');
	Route::post('/store', 'KendaraanController@store');
	Route::get('/show/{id}', 'KendaraanController@show');
	Route::post('/update/{id}', 'KendaraanController@update');
	Route::delete('/destroy/{id}', 'KendaraanController@destroy');
 
});

