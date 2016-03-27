<?php

Route::get('/','DefaultController@index');
Route::get('/rooms','RoomsController@index');
Route::get('/contact','ContactController@index');
Route::get('/gallery','ContactController@index2');

Route::get('/get-category/{id?}', 'DefaultController@getCategory');

Route::post('/reserve-room', 'DefaultController@reserveRoom');

//Route::get('/pass',function(){
//    return response()->json(\Hash::make("password"));
//});


Route::post('/register-staff','StaffController@addStaff');
Route::get('/staff','StaffController@index');
Route::post('/staff','StaffController@search');
Route::get('/availability','StaffController@availability');
Route::get('/reserve','StaffController@reserve');
Route::get('/check_in','StaffController@checkIn');
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@upload');
Route::get('/upload_gallery','UploadController@galIndex');
Route::post('/galleryUpload','UploadController@galleryUpload');
Route::get('/get-reserve/{id?}', 'StaffController@getReserve');

Route::get('/get-rooms/{id?}', 'StaffController@getRooms');

Route::get('/staff/check-in/{reserve_id?}/{check_in?}', 'StaffController@updateCheckIn');
Route::get('/staff/check-out/{reserve_id?}/{check_in?}', 'StaffController@updateCheckOut');

Route::post('/checkIn-room','StaffController@checkIn_room');
Route::post('/checkOut-room','StaffController@checkOut_room');

Route::get('/checking', 'StaffController@checking');
Route::get('/c_out', 'StaffController@cOut');

Route::post('/block_staff', 'AdminController@block_staff');
Route::post('/unblock_staff', 'AdminController@unblock_staff');

Route::post('/admin_edit', 'AdminController@admin_edit');

Route::get('/edit_detail', 'StaffController@detail');
Route::post('/edit_detail', 'StaffController@edit_detail');

Route::post('/edit_staff', 'AdminController@index');
Route::post('/view_staff', 'AdminController@search');
//Route::get('/billing', 'AdminController@billing');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/block', function () {
        if(Auth::user()->admin === 1){
            return view('admin.block');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/unblock', function () {
        if(Auth::user()->admin === 1){
            return view('admin.unblock');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/register', function () {
        if(Auth::user()->admin === 1){
            return view('auth.register');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/edit_staff', function () {
        if(Auth::user()->admin === 1){
            return view('admin.edit_staff');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/edit_admin', function () {
        if(Auth::user()->admin === 1){
            return view('admin.edit_admin');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/view_staff', function () {
        if(Auth::user()->admin === 1){
            return view('admin.staff_details');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

    Route::get('/view_admin', function () {
        if(Auth::user()->admin === 1){
            return view('admin.admin_details');
        }else{
            return redirect('/staff');
        }
        // Uses Auth Middleware
    });

//    Route::get('/billing','AdminController@billing');      //function () {
//        if(Auth::user()->admin === 1){
//            return view('admin.billing');
//        }else{
//            return redirect('/staff');
//        }
//        // Uses Auth Middleware
//    });
});

Route::post('/check/','DefaultController@search');

Route::controller('auth', 'Auth\AuthController');
