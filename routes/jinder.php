<?php

Route::group(['middleware'=>'auth', 'namespace'=>'Organization'],function(){



Route::get('/sale_user','Master\StaffController@sale_user')->name('sale.user');
Route::get('/store','Master\StoreController@index')->name('store');

Route::get('/projects','Master\StoreController@index')->name('store');
Route::get('/store-drop-down-data','Master\StoreController@store_data')->name('store.dropdown');

Route::post('/store-save','Master\StoreController@save')->name('store.save');
Route::get('/store-delete/{id?}','Master\StoreController@delete')->name('store.del');
Route::get('/store-status/{id?}/{status?}','Master\StoreController@status')->name('store.status');
Route::get('/store-data','Master\StoreController@data')->name('store.data');

Route::get('role', 'Master\RoleController@index')->name('role');
Route::get('role-drop-down-data', 'Master\RoleController@role_data')->name('role.dropdown');

Route::get('role-data', 'Master\RoleController@data')->name('role.list');
Route::post('role', 'Master\RoleController@store')->name('role.save');
Route::get('role/{id?}', 'Master\RoleController@destroy')->name('role.del');
Route::get('role/{id?}/{status?}', 'Master\RoleController@status')->name('role.status');

Route::get('staff', 'Master\StaffController@index')->name('staff');
Route::get('staff-data', 'Master\StaffController@data')->name('staff.list');
Route::any('staff-store', 'Master\StaffController@store')->name('staff.save');
Route::get('staff/{id?}', 'Master\StaffController@destroy')->name('staff.del');
Route::get('staff/{id?}/{status?}', 'Master\StaffController@status')->name('staff.status');
Route::get('staff/{id?}/{store_affiliation?}', 'Master\StaffController@primaryStore')->name('staff.store');
Route::get('staff-store-id', 'Master\StaffController@store_id')->name('store.id');
Route::get('role-type', 'Master\StaffController@role_type')->name('role.type');
Route::post('store-staff-availbility', 'Master\RosterManagementController@get_store_staff')->name('store.staff');



Route::get('staff-availability', 'Master\RosterManagementController@staff_available')->name('staff.available');
Route::get('availability-data', 'Master\RosterManagementController@getStaffAvailData')->name('staff.availableData');

Route::post('availability-store', 'Master\RosterManagementController@store')->name('store.available');
Route::post('availability/{id?}', 'Master\RosterManagementController@destroy')->name('avail.del');
Route::get('roster', 'Master\RosterManagementController@roster_manager')->name('roster.manager');
Route::get('staff-roster', 'Master\RosterManagementController@staff_roaster')->name('roster.staff');
Route::post('roster-save', 'Master\RosterManagementController@roster_store')->name('roster.store');
//harsh


Route::get('product', 'Master\ProductController@index')->name('product.dashboard');
Route::get('product-data', 'Master\ProductController@data')->name('product.data');
Route::get('product-add', 'Master\ProductController@add_product')->name('product.add');
Route::get('product-edit/{id?}', 'Master\ProductController@edit')->name('product.edit');
Route::post('product-delete/{id?}', 'Master\ProductController@destroy')->name('product.delete');
Route::get('product-imei/{input?}', 'Master\ProductApiController@searchimei')->name('product.searchimei');
Route::get('product-name/{input?}', 'Master\ProductApiController@searchname')->name('product.searchname');
Route::post('product-store', 'Master\ProductApiController@store')->name('product.store');
Route::get('product-filter/{filter?}/{search_filter?}', 'Master\ProductApiController@filter')->name('product.filter');
Route::get('supplier-drop-down', 'Master\ProductApiController@supplier')->name('product.supplier');

// Route::get('receive-stock', 'Master\ReceiveStockController@index')->name('stock.dashboard');

});
