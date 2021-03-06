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
Route::get('/','PagesController@landingpage')->name('Landing');

Route::resource('/Home',"Home\HomeController");

Route::get('/Unavailable','PagesController@unavailable')->name('unavailable');

Auth::routes();
// this route is for the dashboard
Route::get('/Dashboard', 'DashboardController@index')->name('Dashboard');
