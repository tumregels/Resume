<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'DataController@index');

Route::get('/create', 'DataController@create');
Route::post('/create', 'DataController@handleCreate');

Route::get('search', 'DataController@search');
Route::post('search', 'DataController@handleSearch');

Route::get('detailedsearch', 'DataController@detailedSearch');
Route::post('detailedsearch', 'DataController@handleDetailedSearch');

Route::get('/delete/{id}', 'DataController@delete');
Route::post('/delete', 'DataController@handleDelete');
