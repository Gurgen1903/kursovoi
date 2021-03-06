<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('home');
//});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/logout', 'Auth\AuthController@logout');
Route::get('/admin/home', 'Admin\AdminController@index');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postStore');


//Route::controllers([
//    'password' => 'Auth\PasswordController',
//]);