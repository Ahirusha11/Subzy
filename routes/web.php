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
Route::get('/contact','pagecontroller@getContact');

Route::get('/aboutus','pagecontroller@getaboutus');

Route::get('/films','pagecontroller@getfilms');

Route::get('/tv','pagecontroller@gettv');

Route::get('/cartoon','pagecontroller@getcartoon');

Route::get('/cole','pagecontroller@getcole');

Route::post('/saveTask','TaskController@store');