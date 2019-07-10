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
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses'=> 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');

//Authentication routes
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@Login'] );
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);

//Registration routes
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');


//Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
