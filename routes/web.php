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

Route::get('/dashboard', 'PosController@index')->name('dashboard');

Route::resource('role', 'RoleController');


//Admin

Route::group(['namespace'=>'Admin'],function(){
	
	Route::get('/','Auth\LoginController@login_form')->name('login.form')->middleware('redirect');
	Route::post('login','Auth\LoginController@login')->name('login');

	Route::group(['middleware'=>'admin'],function(){

		Route::get('/home','Auth\LoginController@home')->name('home');
		Route::get('/logout','Auth\LoginController@logout')->name('logout');
	});
});
Route::get('/store','Master\StoreController@index')->name('store');
Route::post('/store-save','Master\StoreController@save')->name('store.save');