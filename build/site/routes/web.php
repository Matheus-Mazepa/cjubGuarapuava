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

Route::put('/participantes/{id}', 'ParticipantController@update')->name('participants.update')->middleware('auth');

Route::get('/participantes', 'ParticipantController@index')->name('participants.index')->middleware('auth');


//remover o auth
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/#programming')->name('programming')->middleware('auth');

Route::get('/#accommodation')->name('accommodation')->middleware('auth');

Route::get('/#speakers')->name('speakers')->middleware('auth');

Route::get('/inscreva-se', 'ParticipantController@create')->name('participants.create')->middleware('auth');

Route::post('/inscreva-se', 'ParticipantController@store')->name('participants.store')->middleware('auth');



Route::get('/oficinas', 'WorkshopController@index')->name('workshops.index')->middleware('auth');
