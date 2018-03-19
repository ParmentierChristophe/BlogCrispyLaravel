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

Route::get('/', 'ArticleController@index');
Route::get('/login', 'AuthController@login');
Route::post( '/login', 'AuthController@postLogin' );
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get( '{id}', 'ArticleController@show' );
Route::delete('article/{id}', 'ArticleController@destroy');


Route::get('/user/{id}', 'UserControler@show');
Route::get('/category/{id}', 'CategoryControler@show');
Route::post('/', 'NewsletterController@store');
