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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','HomeController@dashboard');
Route::get('/','HomeController@dashboard');

Route::get('history','HomeController@history');
Route::get('inputs','HomeController@inputs');
Route::get('input/{input}','HomeController@inputDetails');
Route::get('logout','HomeController@logout');
Route::get('profile','HomeController@profile');
Route::get('settings','HomeController@settings');

Route::get('toggle-input/{input}','HomeController@toggleInput');

Route::post('inputs','HomeController@postUpdateInput');
Route::post('profile','HomeController@postUpdateProfile');
Route::post('change-password','HomeController@postChangePassword');

Route::post('settings','HomeController@postSettings');


Auth::routes();


