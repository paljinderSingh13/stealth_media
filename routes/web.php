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

// Route::get('/', function () {

//     return view('welcome');
// });
Route::get('/imgs', 'ImageController@create');
Route::post('/img-store', 'ImageController@store')->name('img.store');

Route::get('/dashboard', 'PosController@index')->name('dashboard');

// Route::resource('role', 'RoleController');


//Admin

// Route::group(['namespace'=>'Organization\Auth'],function(){

// 	Route::get('/','LoginController@login_form')->name('login.form')->middleware('redirect');
// 	Route::post('login','LoginController@login')->name('login.post');

// 	Route::get('/lo',function(){
// 		dd(234567890);
// 	})->name('login');

// 	Route::group(['middleware'=>'aauth'],function(){


		Route::get('/home','LoginController@home')->name('home');
// 		Route::get('/logout','LoginController@logout')->name('logout');
// 	});
// });


// Route::get('/{image}', 'ImageController@show');


	 include('jinder.php');
	// include('harsh.php');
	// include('deep.php');







// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'Organization'],function(){
	Route::get('/','Auth\LoginController@showLoginForm')->name('org.login');
	Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');
