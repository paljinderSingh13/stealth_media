<?php


Route::get('/store','Master\StoreController@index')->name('store');
Route::post('/store-save','Master\StoreController@save')->name('store.save');