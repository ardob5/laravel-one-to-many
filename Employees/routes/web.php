<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index')->name('home');
Route::get('/create', 'EmployeeController@create')->name('create');
Route::post('/store', 'EmployeeController@store')->name('store');
// Route::get('edit/{id}', 'EmployeeController@edit')->name('edit');
