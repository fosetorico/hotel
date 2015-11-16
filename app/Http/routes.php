<?php

Route::get('/','DefaultController@index');
Route::get('/rooms','RoomsController@index');
Route::get('/contact','ContactController@index');

Route::get('/get-category/{id?}', 'DefaultController@getCategory');

Route::post('/reserve-room/', 'DefaultController@reserveRoom');

Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@search');
Route::get('/upload','UploadController@index');

//Route::get('/admin', 'AdminController@index');
Route::get('/staff-remove', 'AdminController@removeStaff');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        if(Auth::user()->admin === 1){
            return view('staffs.admin');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/staff-remove', function () {
        if(Auth::user()->admin === 1){
            return view('staffs.staff-remove');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });
});

Route::post('/check/','DefaultController@search');

Route::controller('auth', 'Auth\AuthController');
