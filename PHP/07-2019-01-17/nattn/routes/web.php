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
Route::get('Na', function() {
    return view('hello');
});
route::get('hello',function() {
return view('demo');
});
route::get('/', 'Controller@tralaiViewWelcome');
route::get('hi', 'controller@tralaiviewhello');
route::get('//', 'controller@tralaiviewdemo');
route::get('index', 'UserController@index');
route::get('create', 'UserController@create');
route::get('show', 'UserController@show');