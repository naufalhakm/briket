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

// Login/Register/Edit
Route::get('/login','LoginController@index')->name('login.index')->middleware('guest');
Route::post('/login','LoginController@authenticate')->name('login.authenticate');
Route::post('/logout','LoginController@logout')->name('login.logout');

Route::get('/register','RegisterController@index')->name('register.index')->middleware('guest');
Route::post('/register', 'RegisterController@store')->name('register.store');

Route::get('/myaccount', 'UserContoller@edit')->name('user.edit');
Route::put('/myaccount', 'UserContoller@update')->name('user.update');

// Dashboard
Route::get('/', 'HomeController@index')->name('home.index');
Route::post('/', 'HomeController@store')->name('home.store');

// Train
Route::get('/train', 'TrainController@index')->name('train.index');
Route::post('/train', 'TrainController@store')->name('train.store');

// Pesanan
Route::get('/mybooking', 'OrderController@index')->name('order.index')->middleware('auth');
