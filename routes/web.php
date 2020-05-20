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

Route::get('/', 'HomeController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/ticket','TicketController@create');
Route::post('/create/ticket','TicketController@store');
Route::get('/ticket','TicketController@index');
Route::get('/edit/ticket/{ticket}','TicketController@edit');
Route::put('/update/ticket/{ticket}','TicketController@update');
Route::delete('/delete/ticket/{ticket}','TicketController@destroy');
Route::get('/search/ticket','TicketController@search')->middleware('auth');
Route::get('/register/info','HomeController@info');
Route::put('/register/info/{user}','HomeController@submitInfo');
Route::get('/register/ktp','HomeController@ktp');
Route::put('/register/ktp/{user}','HomeController@submitKTP');
Route::get('/account','HomeController@editProfile');
Route::put('/account/{user}','HomeController@submitProfile');
Route::get('/account/changepassword','HomeController@editPassword');
Route::put('/account/submitpassword/{user}','HomeController@submitPassword');
Route::post('/cart/add','CartController@store');
Route::get('/cart','CartController@show')->middleware('auth');
