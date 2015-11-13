<?php

//Route::get('/', 'PagesController@index');

Route::get('/','DefaultController@index');
Route::get('/home','StaffController@index');

Route::get('/get-category/{id?}', 'DefaultController@getCategory');

Route::post('/reserve-room/', 'DefaultController@reserveRoom');

Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@search');

Route::post('/check/','DefaultController@search');

Route::get('/rooms','RoomsController@index');

//Route::get('/staffLogin','StaffLoginController@index');

Route::controller('auth', 'Auth\AuthController');

//Route::get('default','DefaultController@slide');