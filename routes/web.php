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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','AdminController@home');

Route::get('/services', array('as' => 'services', 'uses' => 'AdminController@services'));
Route::get('/contact', array('as' => 'contact', 'uses' => 'AdminController@contact'));
Route::get('/gallery', array('as' => 'gallery', 'uses' => 'AdminController@gallery'));
