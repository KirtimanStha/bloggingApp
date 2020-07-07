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
//     return view('user.home');
// });

// Route::get('/contact/', function () {
//     return view('user.contact');
// });

// Route::get('/about/', function () {
//     return view('user.about');
// });

// Route::get('/myblog/', function () {
// 	return view('user.myblog');
// });

// Route::get('/', function(){
// 	return view('admin.home');
// });

// Route::get('/profile/', function(){
// 	return view('admin.profile');
// });

// Route::get('/bloglist/', function(){
// 	return view('admin.bloglist');
// });

// Route::get('/create/', function(){
// 	return view('admin.create');
// });

// Route::get('/dashboard/', function(){
// 	return view('admin.dashboard');
// });

Route::namespace("User")->group(function(){
	Route::get('/', 'HomeController@home');
	Route::get('/about/', 'HomeController@about');
	Route::get('/contact/', 'HomeController@contact');
	Route::get('/myblog/', 'HomeController@myblog');
	Route::get('/signin/', 'HomeController@signin');
	Route::get('/blog1/', 'HomeController@blog1');
	Route::post('message', 'MessageController@store');
});

Route::namespace('Admin')->group(function(){
	Route::resource('admin/blog','BlogController');
	Route::get('/admin/dashboard/','PanelController@dashboard');
	Route::get('/admin/profile/','PanelController@profile');
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');
	// Route::get('/admin/create/','PanelController@create');
	// Route::get('/admin/list/','PanelController@home');
});