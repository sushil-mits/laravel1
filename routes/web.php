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
    return view('welcome');
});


Route::get('users',['uses'=>'usersController@index']);

Route::get('users/create',['uses'=>'usersController@create']);

Route::post('users',['uses'=>'usersController@store']);
Auth::routes();
Route::get('profile',['uses'=>'PagesController@profile']);
Route::get('settings',['uses'=>'PagesController@settings']);

Route::get('/home', 'HomeController@index');

Route::get('blade',['uses'=>'PagesController@blade']);
