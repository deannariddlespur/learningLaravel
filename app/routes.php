<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
|| and give it the Closure to execute when that URI is requested.
Testing 123
|
*/
Route::model('task', 'Task');
Route::get('/','TasksController@home');
Route::get('/create','TasksController@create');
Route::get('/edit/{task}','TasksController@edit');
Route::post('/edit', 'TasksController@doEdit');
Route::get('/delete/{task}','TasksController@delete');
Route::post('/delete', 'TasksController@doDelete');
// listen for when we POST to the create page and then call saveCreate action in the TasksController to handle the form.
Route::post('/create', 'TasksController@saveCreate');
Route::get('task/{id}', 'TasksController@show')->where('id', '\d+');


