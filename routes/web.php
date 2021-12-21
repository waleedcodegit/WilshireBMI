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
Route::view('/admin/add-events', 'welcome');
Route::view('/admin/list-events', 'welcome');
Route::view('/admin/edit-events/{id}', 'welcome');

Route::view('/admin/add-user', 'welcome');
Route::view('/admin/edit-user/{id}', 'welcome');
Route::view('/admin/users', 'welcome');

Route::view('/admin/add-slots', 'welcome');
Route::view('/admin/slots', 'welcome');
Route::view('/admin/appointments', 'welcome');

Route::any('/' , 'AdminController@get_coming_events');
Route::view('/vision-mission' , 'Front.vision-mission');
Route::view('/history' , 'Front.history');
// Route::get('/{path?}', 'app\Http\Controllers\AdminController@get_event_description');
Route::any('/event/{slug}' , 'AdminController@get_event_description');
Route::view('/executive-committee' , 'Front.executive-committee');
Route::view('/members' , 'Front.members');
Route::view('/summit' , 'Front.summit');
Route::view('/guideline' , 'Front.guideline');
Route::view('/PMMSG' , 'Front.PMMSG');
Route::view('/events' , 'Front.events');
Route::view('/diabetes-events' , 'Front.diabetes-events');
Route::view('/contact' , 'Front.contact');

// Route::get('/admin', function () {




Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/admin{path?}', function () {
    return view('welcome');
});

// Route::view('/admin', 'welcome');
// Route::view('/admin', 'welcome');
// Route::view('/admin', 'welcome');
Route::get('comingevents','AdminController@comingevents');

Route::get('/diabetes-events','AdminController@get_all_events');