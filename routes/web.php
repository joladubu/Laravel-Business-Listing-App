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

Route::get('/', 'ListingsController@index');  //homepage


Auth::routes();
Route::resource('listings', 'ListingsController'); // access to methods available in the listingCOntroller

Route::get('/dashboard', 'DashboardController@index');
