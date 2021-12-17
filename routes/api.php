<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login-admin','AdminController@login_admin');
Route::post('/check-auth-admin','AdminController@admin_check_auth');

Route::post('/add_client', 'AdminController@add_client');
Route::post('/get_clients', 'AdminController@get_clients');
Route::post('/get_client_by_id', 'AdminController@get_client_by_id');
Route::post('/update_client', 'AdminController@update_client');
Route::post('/delete_client', 'AdminController@delete_client');
Route::post('/get_dates', 'AdminController@get_dates');
Route::post('/create_slots', 'AdminController@create_slots');
Route::post('/get_slots_by_date', 'AdminController@get_slots_by_date');
Route::post('/delete_slot', 'AdminController@delete_slot');
Route::post('/client_login', 'AdminController@client_login');
Route::post('/make_appointment', 'AdminController@make_appointment');
Route::post('/get_available_slots', 'AdminController@get_available_slots');

Route::post('/get_appointments_by_date', 'AdminController@get_appointments_by_date');
Route::post('/delete_appointment', 'AdminController@delete_appointment');


Route::post('/add_event', 'AdminController@add_event');
Route::post('/get_events', 'AdminController@get_events');
Route::post('/get_event_by_id', 'AdminController@get_event_by_id');
Route::post('/update_event', 'AdminController@update_event');
Route::post('/delete_event', 'AdminController@delete_event');
// Route::post('/get_all_events', 'AdminController@get_all_events');
Route::post('/get_coming_events', 'AdminController@get_coming_events');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
