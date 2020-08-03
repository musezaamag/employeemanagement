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
Route::get('/','EmployeesController@index');
Route::get('/employees', 'EmployeesController@index')->name('employees.index');
Route::get('/employees/{id}', 'EmployeesController@byid')->name('employees.{id}');
Route::post('/employees','EmployeesController@store')->name('employees.store');
Route::PUT('/employees/{id}','EmployeesController@edit')->name('employees.edit');
Route::DELETE('/employees/{id}','EmployeesController@delete')->name('employees.delete');
Route::get('/form','FormController@index')->name('form.index');
Route::get('/edit/{id}','FormController@edit')->name('form.edit');
Route::PUT('/edit/{id}','FormController@edit')->name('form.edit');





