<?php
// app/controlers/ClientSitesController.php

class ClientSitesController extends BaseController
{	
	     
	     public function create()
	     {
	     		return View::make('create');
	     }
	     
	     public function edit( ClientSite $clientsite )
		
	     {
	     		return View::make('edit', compact('clientsite'));
	     }
		 public function doEdit()
		 {
		 	$clientsite = clientsite::findOrFail(Input::get('clientID'));
			$clientsite->siteName = Input::get('siteName');
			$clientsite->description = Input::get('description');
			$clientsite->launchDate = Input::get('launchDate');
			$clientsite->save();
			
			return Redirect::action('PagesController@home');
		 }
	     public function delete(Clientsite $clientsite)
	     {
	     		return View::make('delete', compact('clientsite'));
	     }
		 public function doDelete()
		 {
		 	$clientsite = Clientsite::findOrFail(Input::get('clientID'));
			$clientsite->delete();
			return Redirect::action('PagesController@home');
		 }
	     public function saveCreate()
	     {
	     		$input = Input::all();
	     		
	     		$clientsite = new ClientSite;
	     		$clientsite->siteName = $input['siteName'];
	     		$clientsite->description = $input['description'];
	     		$clientsite->launchDate = $input['launchDate'];
	     		$clientsite->save();
	     		
	     		return Redirect::action('PagesController@home');
	     	}
		 public function show($clientID)
		 {
		 	$clientsite = Clientsite::find($clientID);
			return View::make('clientsite', compact('clientsite'));
		 }
}
