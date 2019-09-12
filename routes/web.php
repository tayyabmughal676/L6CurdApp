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

// Route::get('/home', 'ProjectController@index');
// Route::get('/home/create', 'ProjectController@create');
// Route::post('/home/', 'ProjectController@store');
// Route::get('/home/{id}', 'ProjectController@show');
// Route::get('/home/{id}/edit', 'ProjectController@edit');
// Route::patch('/home/{id}' , 'ProjectController@update');
// Route::delete('/home/{id}', 'ProjectController@destroy');

Route::resource('/home', 'ProjectController');
// /users 
Route::resource('/users', 'UserController');

Route::view('master', 'users.layouts.master');