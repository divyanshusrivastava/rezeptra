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
// Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/','PageController@index');

// Route::post('/','Auth\AuthController@postLogin');

Route::get('register/patient','ReceptionController@index');

Route::post('register/patient','ReceptionController@store');

Route::get('dr/patient','DrController@index');
Route::post('dr/patient','DrController@patient');
Route::get('dr/popup/{diag_id}','DrController@popup');
Route::get('patient/{id}','PatientController@ajaxpat');