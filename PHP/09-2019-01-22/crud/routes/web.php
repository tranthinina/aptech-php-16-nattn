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
route::get('users/create', 'UserController@create');
route::post('users/store', 'UserController@store')->name('users.store');
route::get('users/index', 'UserController@index')->name('users.index');

