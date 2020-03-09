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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {return "Goodbye";});

Route::get('/rooms/{roomType?}', 'ShowRoomsController');

Route::resource('bookings', 'BookingController');

Route::resource('room_types', 'RoomTypeController');

// Route::get('stripe', 'StripePaymentController@stripe');
// Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/plans', 'PlanController@index')->name('plans.index');
Route::get('/plan/{plan}', 'PlanController@show')->name('plans.show');
Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');

Route::get('/test', function() { return "GoogBye";})->middleware('verified');

