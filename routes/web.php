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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'AdminController@index')->name('home');
    Route::resource('department','DepartmentController');
    Route::resource('users','UserController');
    Route::get('projectdetail/{id}', 'ProjectController@projectdetail');
    Route::resource('projects','ProjectController');
    Route::get('approval','EventController@approval');
    Route::get('guest','GuestController@index');
    Route::resource('events', 'EventController');
    Route::resource('calendar', 'CalendarController');

});