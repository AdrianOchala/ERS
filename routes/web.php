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

Route::get('/home', 'PagesController@index');
Route::get('/splits','PagesController@splits');
Route::get('/ads','PagesController@ads');
Route::get('/grafs','PagesController@grafs');
Route::get('/calendar','PagesController@calendar');
Route::get('/community','PagesController@community');
Route::get('/archives','PagesController@archives');

