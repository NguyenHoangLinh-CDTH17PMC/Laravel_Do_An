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

Route::post('/','AdminController@store')->name('xu_ly_dang_nhap');

Route::get('test','AdminController@laythongtin');
Route::get('/','AdminController@index')->name('login');

Route::get('logout','AdminController@dangXuat')->name('logout');

//Auth::routes();
//Route::middleware('auth')->group(function(){

	Route::prefix('cauhoi')->group(function(){
		Route::name('cauhoi.')->group(function(){
			Route::get('/', 'CauhoiController@index')->name('danhsach');
			Route::get('/thungrac', 'CauhoiController@recycle')->name('thungrac');
			Route::get('/{id}/thungrac', 'CauhoiController@restore')->name('khoiphuc');
			Route::get('/themmoi', 'CauhoiController@create')->name('themmoi');
			Route::post('/themmoi', 'CauhoiController@store')->name('xulythemmoi');
			Route::get('/{id}/capnhat', 'CauhoiController@edit')->name('capnhat');
			Route::post('/{id}/capnhat', 'CauhoiController@update')->name('xulycapnhat');
			Route::get('/{id}/xoa', 'CauhoiController@destroy')->name('xoa');
			
		});
	});
	Route::prefix('linhvuc')->group(function(){
		Route::name('linhvuc.')->group(function(){
			//Route::get('/','LinhvucController@capnhatlinhvuc')->name('capnhatlinhvuc');
			Route::get('/', 'LinhvucController@index')->name('danhsach');
			Route::get('/themmoi', 'LinhvucController@create')->name('themmoi');
			Route::post('/themmoi', 'LinhvucController@store')->name('xulythemmoi');
			Route::post('/{id}/capnhat', 'LinhvucController@update')->name('capnhat');
			Route::get('/{id}/capnhat', 'LinhvucController@edit')->name('xulycapnhat');
			Route::get('/{id}/xoa', 'LinhvucController@destroy')->name('xoa');
		});
	});
	Route::prefix('nguoichoi')->group(function(){
		Route::name('nguoichoi.')->group(function(){
			//Route::get('/','LinhvucController@capnhatlinhvuc')->name('capnhatlinhvuc');
			Route::get('/', 'NguoiChoiController@index')->name('danhsach');

			Route::get('/themmoi', 'NguoiChoiController@create')->name('themmoi');
			Route::post('/themmoi', 'NguoiChoiController@store')->name('xulythemmoi');

			Route::post('/capnhat/{id}', 'NguoiChoiController@update')->name('capnhat');
			Route::get('/capnhat/{id}', 'NguoiChoiController@edit')->name('xulycapnhat');

			Route::delete('/xoa/{id}', 'NguoiChoiController@destroy')->name('xoa');
		});
	});
//});