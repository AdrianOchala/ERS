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

Route::get('/', 'PagesController@index');
Route::get('/splits','PagesController@splits');
Route::get('/ads','PagesController@ads');
Route::get('/grafs','PagesController@grafs');
Route::get('/calendar','PagesController@calendar');
Route::get('/community','PagesController@community');
Route::get('/archives','PagesController@archives');
Route::get('/ersGreen','PagesController@ersGreen');
Route::get('/ersBlue','PagesController@ersBlue');
Route::get('/f1','PagesController@f1');
Route::get('/f2','PagesController@f2');
Route::get('/f3','PagesController@f3');
Route::get('/f4','PagesController@f4');
Route::get('/jeszczeNic','PagesController@jeszczeNic');





