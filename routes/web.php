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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/#programming')->name('programming');

Route::get('/#accommodation')->name('accommodation');

Route::get('/#speakers')->name('speakers');

Route::get('/#tourism')->name('tourism');

Route::get('/#climate')->name('climate');

Route::get('/#location')->name('location');

Route::get('/inscreva-se', 'ParticipantController@create')->name('participants.create');

Route::post('/inscreva-se', 'ParticipantController@store')->name('participants.store');



Route::get('/oficinas', 'WorkshopController@index')->name('workshops.index');
