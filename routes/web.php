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

Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');

Route::get('/organizations', 'OrganizationController@organizations')->name('organizations');

Route::get('/news', 'NewsController@news')->name('news');
