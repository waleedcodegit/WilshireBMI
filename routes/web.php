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

Route::view('/admin/add-user', 'welcome');
Route::view('/admin/edit-user/{id}', 'welcome');
Route::view('/admin/users', 'welcome');

Route::view('/admin/add-slots', 'welcome');
Route::view('/admin/slots', 'welcome');
Route::view('/admin/appointments', 'welcome');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/{path?}', function () {
    return view('welcome');
});



// Route::view('/admin', 'welcome');
// Route::view('/admin', 'welcome');
// Route::view('/admin', 'welcome');
