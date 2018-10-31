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
    return view('index1');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contactus');
});


Route::get('/about', function () {
    return view('about');
});


Route::group(['prefix' => 'admin/gallery'], function(){
	Route::get('/', 'GalleryController@index')->name('admin.galleries');
	Route::post('/create', 'GalleryController@create')->name('admin.galleries.create');

});


Route::get('/contactus', 'UserController@contactus')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
