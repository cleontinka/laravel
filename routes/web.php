<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.base');
});
Route::get('/', 'MainController@index')->name('site.main.index');
Route::get('/article/{id}', 'ArticleController@oneAction')->where('id','[0-9]+');

Route::get('/registration.html', 'AuthController@registration')->name('site.auth.registration');
Route::post('/registration.html', 'AuthController@registrationPost')->name('site.auth.registrationPost');
Route::get('/login.html', 'AuthController@login')->name('site.auth.login');
Route::post('/login.html', 'AuthController@loginPost')->name('site.auth.loginPost');
Route::get('/logout', 'AuthController@logout')->name('site.auth.logout');