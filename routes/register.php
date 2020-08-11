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


Route::get('/profile', 'RegistrationController@profile');

// user area routes
Route::group(['namespace' => 'Register'], function () {
  Route::get('/profile', 'RegistrationController@profile');
  Route::get('/', 'RegistrationController@register');
  Route::post('/register', 'RegistrationController@store');
  Route::get('/login', 'sessionController@login');
  Route::post('/login', 'sessionController@store');
  Route::get('/logout', 'sessionController@destroy');

});
