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
Route::get('/', 'PagesController@home');
Route::get('ClientProfile/{siteName}', 'PagesController@profile');
Route::post('FeatureGroupProfile','PagesController@groupProfile');
Route::post('FeatureGroupFeatureDelete','PagesController@groupProfileFeatureDelete');
Route::post('FeatureGroupFeatureAdd','PagesController@featureGroupFeatureAdd');
Route::post('ClientFeatureEdit', 'PagesController@ClientFeatureEdit');
Route::post('ClientFeatureUpdate', 'PagesController@ClientFeatureUpdate');

Route::get('/create','PagesController@create');
Route::post('/create', 'PagesController@saveCreate');

Route::model('clientsite', 'ClientSite');
Route::get('/','PagesController@home');
Route::get('/create','ClientSitesController@create');
Route::get('/edit/{clientsite}','ClientSitesController@edit');
Route::post('/edit', 'ClientSitesController@doEdit');
Route::get('/delete/{clientsite}','ClientSitesController@delete');
Route::post('/delete', 'ClientSitesController@doDelete');
// listen for when we POST to the create page and then call saveCreate action in the ClientSitessController to handle the form.
Route::post('/create', 'ClientSitesController@saveCreate');
Route::get('clientsite/{clientID}', 'ClientSitesController@show')->where('clientID', '\d+');


