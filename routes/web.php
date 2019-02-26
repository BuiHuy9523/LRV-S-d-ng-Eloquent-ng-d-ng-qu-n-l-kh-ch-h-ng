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
Route::get('index', 'CustomerController@list')->name('list');
Route::get('create', 'CustomerController@create');
Route::post('create', 'CustomerController@insert');

Route::get('{id}/edit', 'CustomerController@edit')->name('edit');
Route::post('{id}/edit', 'CustomerController@update')->name('update');

Route::get('{id}/delete', 'CustomerController@delete')->name('delete');