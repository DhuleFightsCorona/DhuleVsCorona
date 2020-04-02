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

Route::get('/','HomeController@home');
Route::resource('f', 'DataController');
Route::get('/news','HomeController@news');
Route::get('/helpline','HomeController@helpline');
Route::get('/cluster','HomeController@cluster');
Route::get('/faq','HomeController@faq');
Route::get('/pp','HomeController@policy');
Route::get('/aboutus','HomeController@aboutus');
Route::post('/familyform','DataController@familyform');
Route::get('/familyform','DataController@familyformview');