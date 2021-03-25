<?php

//** Must Be Not Login As A Admin *****//
Route::group(['middleware' => 'guest:admin'], function (){
  Route::get('Dashboard/Login','AuthController@showlogin');
  Route::post('Dashboard/Login','AuthController@login')->name('admin.login');
});

// Admin Protected Area
Route::group(['prefix' => 'Dashboard','as' => 'admin.','middleware' => 'auth:admin'], function (){

      // mainDashboardPage
      Route::get('/','DashboardController@index');
      // Admins
      Route::resource('Admins','AdminsController');
      // Brands
      Route::resource('Brands','BrandsController');
      // payments
      Route::resource('Payments','PaymentsController');
      // Lougout
      Route::post('Logout','AuthController@logout')->name('logout');
});
