<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/edit/{page}', 'AdminController@edit');
Route::post('/admin/edit/{page}', 'AdminController@update');

Route::get('/admin/settings', 'AdminController@settings');
Route::post('/admin/settings', 'AdminController@settingsUpdate');
Route::post('/contact/submit', 'HomeController@contactSubmit');
