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

Route::get('/tasks', 'TaskController@index');

Route::post('/tasks/create', 'TaskController@create');

Route::post('/tasks/edit/{id}', 'TaskController@edit');

Route::post('/tasks/update', 'TaskController@update');

Route::post('/tasks/complete/', 'TaskController@complete');

Route::get('/tasks/mypage', 'TaskController@mypage');

Route::delete('/tasks/delete/{task}', 'TaskController@delete');

Route::get('/logout', function() {
  return view('logout');
});