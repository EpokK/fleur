<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('accueil', 'HomeController@index');
Route::get('contact', 'HomeController@contact');
Route::resource('bouquet', 'BouquetController');
Route::resource('fleur', 'FleurController');
Route::resource('contenant', 'ContenantController');