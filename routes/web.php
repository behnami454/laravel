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

use App\Http\Controllers\maincontroller;

Route::get('/', 'maincontroller@index');
Route::get('/form', 'maincontroller@indexx');
Route::get('/done', 'maincontroller@indexxx');
Route::post('/done', 'maincontroller@store');
Route::get('/orders' , 'maincontroller@indexxxx')->middleware('auth');
Route::get('/orders', 'maincontroller@indexxxxx');
Route::delete('orders/{id}','maincontroller@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
