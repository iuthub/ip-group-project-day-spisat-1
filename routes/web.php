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

Route::get('/', [
  'uses' => 'HotelController@getIndex',
  'as' => 'index'
]);

Route::get('/reservations', [
  'uses' => 'HotelController@getReservations',
  'as' => 'reservations'
]);

Route::get('/contact_us', [
  'uses' => 'HotelController@getContactUs',
  'as' => 'contactUs'
]);

Route::post('/rooms', [
  'uses' => 'HotelController@postRooms',
  'as' => 'rooms'
]);

Route::post('/payment_details', [
  'uses' => 'HotelController@postPaymentDetails',
  'as' => 'paymentDetails'
]);

Route::group([
  'prefix' => 'admin'
], function() {

    Route::get('/', [
      'uses' => 'HotelController@getAdminIndex',
      'as' => 'adminIndex'
    ]);

    Route::get('/reservations', [
      'uses' => 'HotelController@getAdminReservations',
      'as' => 'adminReservations'
    ]);

    Route::get('/rooms', [
      'uses' => 'HotelController@getAdminRooms',
      'as' => 'adminRooms'
    ]);

    Route::get('/add_room', [
      'uses' => 'HotelController@getAdminAddRoom',
      'as' => 'adminAddRoom'
    ]);
});