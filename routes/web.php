<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('frontend.home');
});

// For backend
Route::resource('hall','HallController');

Route::resource('shows','ShowController');


Route::resource('seat','SeatController');

Route::resource('movie','MovieController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// For Frontend
Route::get('home', 'FrontendController@home')->name('frontend.home');



