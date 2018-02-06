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
    return view('index');
});

Route::get('show',[
	'as'=>'show',
	'uses'=>'EmployeeController@show'
]);

Route::get('add',[
	'as'=>'add',
	'uses'=>'EmployeeController@add'
]);

Route::post('add',[
	'as'=>'add',
	'uses'=>'EmployeeController@postAdd'
]);

Route::get('edit/{id}',[
	'as'=>'edit',
	'uses'=>'EmployeeController@edit'
]);

Route::post('edit/{id}',[
	'as'=>'edit',
	'uses'=>'EmployeeController@postEdit'
]);

Route::delete('/task/{id}',[
	'as'=>'delete',
	'uses'=>'EmployeeController@delete'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'EmployeeController@search'
]);