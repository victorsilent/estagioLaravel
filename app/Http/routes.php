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


//Route::resource('app','AppController'); 

Route::resource('vagas','VagasController');
Route::post('home','HomeController@filtro');
Route::get('home','HomeController@index');