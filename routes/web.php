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
/*Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});*/

//Authentication Routes
Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::get('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@getLogout');

//Registration Routes
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::get('auth/register', 'Auth\RegisterController@postRegister');

Route::get('contact','PagesController@getContact');
Route::get('about','PagesController@getAbout');
Route::get('/','PagesController@getIndex');
Route::resource('posts','PostController');

Route::auth();
//Auth::routes();
