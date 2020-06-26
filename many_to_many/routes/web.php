<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'EmployeeController@index')->name('emp_home');
Route::get('/show/{id}', 'EmployeeController@show')->name('emp_show');

Route::get('/edit/{id}', 'EmployeeController@edit')->name('emp_edit');
Route::post('/update/{id}', 'EmployeeController@update')->name('emp_update');
