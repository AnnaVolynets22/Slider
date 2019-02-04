<?php

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

Route::get('/', function () {
    return view('user.userview');
});

Route::get('/user/', function () {
    return view('user.userview');
});
Route::get('/admin/', function () {
    return view('admin.adminview');
});


Route::resource('admin/sliders', 'Admin\\SlidersController');
Route::resource('admin/images', 'Admin\\ImagesController');
