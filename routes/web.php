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

Route::get('/', function(){
    return view('homepage.index');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => '\App\Http\Middleware\AdminMiddleware'], function(){
        Route::get('/kematerian', 'HomeController@materi');

        //Add Matalomba
        Route::post('/kematerian/add', 'MatalombaController@store');
        Route::patch('/kematerian/{id}/edit', 'MatalombaController@update');
        Route::get('/kematerian/delete/{id}', 'MatalombaController@delete');

        Route::get('/kematerian/{id}', 'MatalombaController@index');
        Route::get('/kematerian/{id}/add', 'SoalController@index');
        //Add Soal
        Route::post('/kematerian/{id}/add_submit', 'SoalController@store');
        Route::get('/kematerian/{id}/edit/{id_soal}', 'SoalController@edit');
        Route::patch('/kematerian/{id}/update/{id_soal}', 'SoalController@update');
        Route::get('/kematerian/{id}/delete/{id_soal}', 'SoalController@delete');
    });

    Route::group(['middleware' => '\App\Http\Middleware\PesertaMiddleware'], function(){
        Route::get('/kompetisi', 'KompetisiController@index');
        Route::post('/kompetisi/submit', 'KompetisiController@store');
        Route::get('/kompetisi/{id}', 'KompetisiController@detail');
        
        Route::get('/rekapitulasi', 'RekapController@index');
    });
    Route::get('/dashboard', 'HomeController@index');
});

