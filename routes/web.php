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

// Route::get('/', function () {
//     return view('index1');
// })->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');

// Route::get('/gallery', function () {
//     return view('gallery');
// });

Route::get('/contact', function () {
    return view('contactus');
});


Route::get('/about', function () {
    return view('about');
});
	
Route::get('/admin', function(){
	return redirect(route('admin.layanan'));
})->name('admin')->middleware('auth');

Route::group(['prefix' => 'admin/gallery', 'middleware' => ['auth']], function(){
	Route::get('/', 'GalleryController@index')->name('admin.galleries');
	Route::post('/create', 'GalleryController@create')->name('admin.galleries.create');
	Route::get('/destroy/{gallery}', 'GalleryController@destroy')->name('admin.galleries.destroy');
});

Route::group(['prefix' => 'admin/layanan', 'middleware' => ['auth']], function(){
	Route::get('/', 'LayananController@index')->name('admin.layanan');
	Route::post('/create', 'LayananController@create')->name('admin.layanan.create');
	Route::get('/destroy/{layanan}', 'LayananController@destroy')->name('admin.layanan.destroy');
	Route::get('/update/{layanan}', 'LayananController@view')->name('admin.layanan.update');
	Route::post('update/{layanan}', 'e.paketLayananController@update')->name('admin.layanan.update');
});

Route::group(['prefix' => 'admin/paket', 'middleware' => ['auth']], function(){
	Route::get('/', 'PaketController@index')->name('admin.paket');
	Route::post('/create/{layanan}', 'PaketController@create')->name('admin.paket.create');
	Route::get('/destroy/{paket}', 'PaketController@destroy')->name('admin.paket.destroy');
	Route::get('/update/{paket}', 'PaketController@view')->name('admin.paket.update');
	Route::post('update/{paket}', 'PaketController@update')->name('admin.paket.update');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/contactus', 'UserController@contactus')->name('contactus');

// Auth::routes();
// 
// Route::get('/home', 'HomeController@index')->name('home');
