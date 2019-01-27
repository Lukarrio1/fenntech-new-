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

Route::get('/','PagesController@landingpage')->name('Fenntech');

Auth::routes();
// this route is for the dashboard
Route::get('/Dashboard', 'DashboardController@index')->name('Dashboard');
// this route is for the fen about page
Route::resource('About','AboutController')->name('About');
// this route is for the fen contact page
Route::resource('Contact_us','ContactController')->name('Contact');
// this route is for the fen job page
Route::resource('Job','JobController')->name('Job');



