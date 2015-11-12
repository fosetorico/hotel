<?php

//Route::get('/', 'PagesController@index');

Route::get('/','DefaultController@index');

Route::get('/get-category/{id?}', 'DefaultController@getCategory');

Route::post('/reserve-room/', 'DefaultController@reserveRoom');

Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@search');

Route::get('/rooms','RoomsController@index');

//Route::get('default','DefaultController@slide');