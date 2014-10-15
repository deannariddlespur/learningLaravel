<?php

class PagesController extends BaseController {

	//returns all client sites from ClientSites table
	public function home()
	{
		$clients = ClientSite::all();
		return View::make('index')->with('clients',$clients);
	}
	//returns client and client feature info for profile
	public function profile($siteName)
	{	//select * from clientSites where siteName = $siteName
		$client = ClientSite::whereSitename($siteName)->first();			
  		$clientID = $client['clientID'];//getting clientID for use in join query
		//queries for retrieving features of each group for the selected client
		
		$forms = DB::table('features')->join('clientFeatures', function($join) use($clientID) 
        {
            $join->on( 'clientFeatures.featureID', '=', 'features.featureID')			
                 ->where('clientFeatures.clientID', '=', $clientID)
	             ->where('features.groupID', '=', 1);
		})->get();
		
		$widgets = DB::table('features')->join('clientFeatures', function($join) use($clientID) 
        {
            $join->on( 'clientFeatures.featureID', '=', 'features.featureID')			
                 ->where('clientFeatures.clientID', '=', $clientID)
	             ->where('features.groupID', '=', 2);
		})->get();
		
		$gadgets = DB::table('features')->join('clientFeatures', function($join) use($clientID) 
        {
            $join->on( 'clientFeatures.featureID', '=', 'features.featureID')			
                 ->where('clientFeatures.clientID', '=', $clientID)
	             ->where('features.groupID', '=', 3);
		})->get();
		
		$maps = DB::table('features')->join('clientFeatures', function($join) use($clientID) 
        {
            $join->on( 'clientFeatures.featureID', '=', 'features.featureID')			
                 ->where('clientFeatures.clientID', '=', $clientID)
	             ->where('features.groupID', '=', 4);
		})->get();
				 
		$tools = DB::table('features')->join('clientFeatures', function($join) use($clientID) 
        {
            $join->on( 'clientFeatures.featureID', '=', 'features.featureID')			
                 ->where('clientFeatures.clientID', '=', $clientID)
	             ->where('features.groupID', '=', 5);
		})->get();

		return View::make('profiles.clientProfiles')->with('client',$client)
													->with('forms',$forms)
													->with('widgets',$widgets)
													->with('gadgets',$gadgets)
													->with('maps',$maps)
													->with('tools',$tools);	
				
	}
	//edit the clients features for selected group
	public function ClientFeatureEdit()
	{	//use clientID and groupID for queries
		$group = Input::get('group');
		$siteName = Input::get('siteName');
		$clientID = Input::get('clientID');
		$groupID = Input::get('groupID');
		//queries for checking featureID values of 'clientFeatures' against 'features' to determine if checkbox is true or not
		
		//get all features from a particular group		
		$featuresOfGroup = DB::table('features')->where('groupID', '=', $groupID )->get();
		//get all features from a particular client -place featureID's in an array
		$clientFeatures = DB::table('clientFeatures')->where('clientID', '=', $clientID)->get();
		$clientFeatures_FeatureID = array_pluck($clientFeatures,'featureID');
		
		return View::make('edit.clientFeatureEdit')->with('featuresOfGroup',$featuresOfGroup)
												  ->with('clientFeatures_FeatureID',$clientFeatures_FeatureID)
												  ->with('siteName',$siteName)->with('group',$group)->with('clientID',$clientID);
	}

	public function ClientFeatureUpdate(){
		
		$clientID = Input::get('clientID');
		$features = Input::get('features');
		$prevFeatures = Input::get('prevFeatures');
		

		if(isset($_POST['features'])){
			foreach ($features as $feature) {
								
					ClientFeature::updateOrCreate(array('clientID'=> $clientID,'featureID'=> $feature));				
			}
			
		}
							
		if(isset($_POST['prevFeatures'])){
			
			foreach ($prevFeatures as $prevFeature) {
				
				if (!(empty($_POST['features']))){
									
					if (!(in_array($prevFeature, $features))){						
						DB::table('clientFeatures')->where('clientID', '=', $clientID) ->where('featureID', '=', $prevFeature)->delete();
					}
					
				}else{
					
					DB::table('clientFeatures')->where('clientID', '=', $clientID) ->where('featureID', '=', $prevFeature)->delete();
					
				}				
			}
		}
						
		return View::make('edit.clientFeatureEdit');				
	
	}
	
	public function groupProfile()
	{
		$groupName = Input::get('groupName');
		$groupID = Input::get('groupID');
		$featuresOfGroup = DB::table('features')->where('groupID','=', $groupID )->get();
		return View::make('profiles.featureGroupProfile')->with('groupName',$groupName)
														 ->with('groupID',$groupID)
														 ->with('featuresOfGroup',$featuresOfGroup);
				
	}
	
	public function groupProfileFeatureDelete()
	{

		$featureID = $_POST['featureID'];
		$featureDelete = DB::table('features')->where('featureID','=',$featureID)->delete();
		return View::make('profiles.featureGroupProfile')->with('featureID',$featureID);

		
	}

	public function featureGroupFeatureAdd()
	{
		$groupName = Input::get('groupName');	
		$groupID = Input::get('groupID');
				
		if(!empty($_POST['featureName'])){
			$featureName = $_POST['featureName'];
			$featureAdd = DB::table('features')->insertGetId(array('groupID' => $groupID, 'featureName' => $featureName));
			return View::make('edit.featureGroupFeatureAdd');
		}else{
			return View::make('edit.featureGroupFeatureAdd')->with('groupName',$groupName)->with('groupID',$groupID);
		}
	}
	//add a site to the database
	 public function create()
	     {
	     		return View::make('edit.create_site');
	     }
	     //save the site to the database
	  public function saveCreate()
	     {
	     	
	     		$input = Input::all();
	     		
	     		$ClientSites = new ClientSite;
	     		$ClientSites->siteName = $input['siteName'];
				$ClientSites->launchDate = $input['launchDate'];
	     		$ClientSites->description = $input['description'];
				
	     		$ClientSites->save();
	     		
	     		
	     		return Redirect::action('PagesController@home');
	     	} 
		 
		 //update the database- create the update view
		  public function edit()
	     {
	     		$clientID = Input::get('clientID');
	     		return View::make('edit.update');
	     }
		 
		 // save the information from the update to the database
		 public function update()
		    {
		    	
				  $clientID = Input::get('clientID');
		    	if (isset($_GET['clientID']) )
			 { 
					$clientID = (int) $_GET['clientID']; 
                     if (isset($_POST['submitted']))
			 { 
                    foreach($_POST AS $key => $value) 
             {      $_POST[$key] = mysql_real_escape_string($value); 
} 
                    $sql = "UPDATE `ClientSites` SET  `siteName` =  '{$_POST['siteName']}' ,  `launchDate` =  '{$_POST['launchDate']}' ,  `description` =  '{$_POST['description']}' ,  `created_at` =  '{$_POST['created_at']}' ,  `updated_at` =  '{$_POST['updated_at']}'   WHERE `clientID` = '$clientID' "; 
                     mysql_query($sql) or die(mysql_error()); 


} 
                    $ClientSites = mysql_fetch_array ( mysql_query("SELECT * FROM `ClientSites` WHERE `clientID` = '$clientID' ")); 
	                $ClientSites->save();
	     		
	     		
	     		return Redirect::action('PagesController@home');


}
			
			}
}
