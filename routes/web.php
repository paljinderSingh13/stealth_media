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

Route::group(['namespace'=>'Auth'],function(){
	
	Route::get('/','LoginController@login_form')->name('login.form')->middleware('redirect');
	Route::post('login','LoginController@login')->name('login');

	Route::group(['middleware'=>'aauth'],function(){

		Route::get('/home','LoginController@home')->name('home');
		Route::get('/logout','LoginController@logout')->name('logout');
	});
});


include('jinder.php');

