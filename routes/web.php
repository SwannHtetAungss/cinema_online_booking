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

// Route::get('/', function () {
//     return redirect()->route('frontend.home');
// });

// For backend
Route::middleware('auth','role:admin')->group(function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard.index');
	Route::post('checkData','DashboardController@checkData')->name('checkData');
	Route::resource('hall','HallController');
	Route::resource('shows','ShowController');
	Route::resource('seat','SeatController');
	Route::resource('movie','MovieController');
});

Route::middleware('auth','role:customer|admin')->group(function () {
	Route::resource('booking','BookingController');
});


//For Authentication

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// For Frontend

Route::get('detail/{id}', 'FrontendController@detail')->name('frontend.detail');

Route::get('contact', 'FrontendController@contact')->name('contact');

Route::get('history', 'FrontendController@history')->name('history');


Route::get('/', 'FrontendController@home')->name('homepage');

Route::get('allmovie', 'FrontendController@movie')->name('frontend.allmovie');

Route::get('choose-seat/{id}/{showid}', 'FrontendController@chooseSeat')->name('frontend.chooseSeat');
 


