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

Route::post('/contact_us/send', [
  'uses' => 'SendEmailController@send',
  'as' => 'sendEmail'
]);

Route::post('/rooms', [
  'uses' => 'HotelController@postRooms',
  'as' => 'rooms'
]);

Route::post('/payment_details', [
  'uses' => 'HotelController@postPaymentDetails',
  'as' => 'paymentDetails'
]);

Route::post('/payment_details/add', [
  'uses' => 'HotelController@addPaymentDetails',
  'as' => 'addPaymentDetails'
]);

Route::post('/payment_details/validate', [
  'uses' => 'HotelController@validatePaymentDetails',
  'as' => 'validatePaymentDetails'
]);

Route::group([
  'prefix' => 'admin',
  'middleware' => ['auth', 'admin']
], function() {

    Route::get('/', [
      'uses' => 'HotelController@getAdminIndex',
      'as' => 'adminIndex'
    ]);

    Route::get('/reservations', [
      'uses' => 'HotelController@getAdminIndex',
      'as' => 'adminReservations'
    ]);

    Route::get('/rooms', [
      'uses' => 'HotelController@getAdminRooms',
      'as' => 'adminRooms'
    ]);

    Route::post('/delete_rooms', [
      'uses' => 'HotelController@deleteRoom',
      'as' => 'deleteRoom'
    ]);

    Route::post('/edit_room', [
      'uses' => 'HotelController@postEditRoom',
      'as' => 'editRoom'
    ]);

    Route::post('/handle_edit_room', [
      'uses' => 'HotelController@handleEditRoom',
      'as' => 'handleEditRoom'
    ]);

    Route::get('/add_room', [
      'uses' => 'HotelController@getAdminAddRoom',
      'as' => 'adminAddRoom'
    ]);

    Route::post('/handle_add_room', [
      'uses' => 'HotelController@handleAddRoom',
      'as' => 'handleAddRoom'
    ]);

    Route::get('updateStatus/{id}/{status}', [
      'uses' => 'HotelController@getAdminUpdateStatus',
      'as' => 'adminUpdateStatus'
    ]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
