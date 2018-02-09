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

// Route::resource('employs','EmployController');

Route::resource('employs', 'EmployController', ['only' => [
    'index','create', 'store', 'destroy','show'
]]);

Route::resource('employs', 'EmployController', ['except' => [
	'update'
]]);

Route::post('edit/{id}',[
	'as'=>'edit',
	'uses'=>'EmployController@update'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'EmployController@search'
]);