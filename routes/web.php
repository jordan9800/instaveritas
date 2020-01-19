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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', 'UserController@index')->name('index');



/**
 *
 * Start of Routes for listing of studios and studio details.
 *
 **/
	Route::get('/addStudio/', 'StudioController@addstudioform')->name('addstudio');
	Route::post('/addStudio/submit', 'StudioController@addstudiosubmit')
						->name('addstudio.submit')->middleware('auth');
/**
 * End of Routes for listing of studios and studio details.
 **/


/**
 *
 * Start of Routes for listing of studios and studio details.
 *
 **/
	Route::get('/studioListing', 'StudioController@studioListing')->name('studioListing');
	Route::get('/studioDetails/{name}/{id}', 'StudioController@studioDetails')
				->name('studioDetails')->middleware('auth');
/**
 * End of Routes for listing of studios and studio details.
 **/


/**
 *
 * Start of Routes for autocomplete and searching studios based on their name or city.
 *
 **/
Route::post('/autocomplete', 'SearchController@autocomplete')->name('autocomplete');
Route::post('/search', 'SearchController@search')->name('search');
/**
 * End of Routes for autocomplete and searching studios based on their name or city.
 **/


/**
 *
 * Start of Routes for creating Booking for a studio
 *
 **/
Route::post('/book/studio', 'BookingController@bookStudio')->name('bookStudio')->middleware('auth');
/**
 * End of Routes for creating Booking for a studio
 **/


/**
 *
 * Start of Routes for users studios and bookings
 *
 **/
Route::get('/myStudios', 'UserController@myStudios')->name('myStudios')->middleware('auth');
Route::get('/myBookings', 'UserController@myBookings')->name('myBookings')->middleware('auth');
/**
 * End of Routes for users studios and bookings
 **/