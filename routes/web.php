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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('home');
Route::resource('department','DepartmentController');
Route::resource('users','UserController');
Route::get('deptusers/{id}', 'UserController@users');
Route::resource('projects','ProjectController');
Route::get('approval','EventController@approval');

Route::resource('events', 'EventController');
Route::resource('calendar', 'CalendarController');