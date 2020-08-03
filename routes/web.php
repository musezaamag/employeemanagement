<?php

use Illuminate\Support\Facades\Route;

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
/* home */
Route::get('/','InformationController@index');
Route::get('/information', 'InformationController@index')->name('information.index');
Route::get('/information/{id}', 'InformationController@byid')->name('information.{id}');
Route::post('/information','informationController@store')->name('information.store');
Route::PUT('/information/{id}','informationController@edit')->name('information.edit');
Route::DELETE('/information/{id}','InformationController@delete')->name('information.delete');
Route::get('/form','FormController@index')->name('form.index');
Route::get('/edit/{id}','FormController@edit')->name('form.edit');
Route::PUT('/edit/{id}','FormController@edit')->name('form.edit');





