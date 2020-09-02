<?php

Route::group(['middleware'=>'aauth', 'namespace'=>'Organization'],function(){

Route::get('/store','Master\StoreController@index')->name('store');
Route::post('/store-save','Master\StoreController@save')->name('store.save');
Route::get('/store-delete/{id?}','Master\StoreController@delete')->name('store.del');
Route::get('/store-status/{id?}/{status?}','Master\StoreController@status')->name('store.status');
Route::get('/store-data','Master\StoreController@data')->name('store.data');

});