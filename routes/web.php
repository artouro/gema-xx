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


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/materi', 'HomeController@materi');
    Route::post('/materi/category/add', 'CategoryController@store');
    Route::patch('/materi/category/{id}/edit', 'CategoryController@update');
    Route::get('/materi/category/{id}/delete', 'CategoryController@delete');

    Route::get('/materi/category/{id}', 'MateriController@index');
});

