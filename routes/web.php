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

Route::get('/psychological_services', 'PagesController@service');

Route::get('/workforce_dev', 'PagesController@workforce');

Route::get('/services_to_school', 'PagesController@services_to_school');

Route::get('/career', 'PagesController@career');

Route::get('/team', 'PagesController@team');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::post('/contact', 'PagesController@store');

Route::get('/services_for_parents', 'PagesController@services_for_parents');