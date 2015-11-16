<?php

Route::get('/','DefaultController@index');
Route::get('/rooms','RoomsController@index');
Route::get('/contact','ContactController@index');

Route::get('/get-category/{id?}', 'DefaultController@getCategory');

Route::post('/reserve-room/', 'DefaultController@reserveRoom');

Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@search');
Route::get('/upload','UploadController@index');

Route::get('/admin','AdminController@index');
Route::get('/staff_remove','StaffRemoveController@index');

Route::post('/check/','DefaultController@search');

Route::controller('auth', 'Auth\AuthController');
