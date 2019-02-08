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

Route::get('/Store','PagesController@index')->name('Fenntech-home');

Route::get('/Unavailable','PagesController@unavailable')->name('unavailable');

Auth::routes();
// this route is for the dashboard
Route::get('/Dashboard', 'DashboardController@index')->name('Dashboard');
// this route is for the fen about page
Route::resource('About','AboutController');
// this route is for the fen contact page
Route::resource('Contact','ContactController');
// this route is for the fen job page
Route::resource('Job','JobController');
// ths is the route for the landing page
Route::resource('Landing','LandingpageController');
