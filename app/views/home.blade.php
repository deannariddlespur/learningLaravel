@extends('layout')
@section('content')

		<section class="header section-padding">
   			 <div class="background">&nbsp;</div>
   			 <div class="container">
        			 <div class="header-text">
             <h1> Learning Laravel: The Easiest Way</h1>
            <p>
            This is our To-do list! <br />
            Built using Laravel 4 framework!
           </p>
             
    		</div>
   </div>
</section>   

<div class="container">
  	<section class="section-padding">
  		<div class="jumbotron text-center">
  		    <div class="panel panel-default">
  		<div class="panel-heading">
  		<h1>
  				<span class="grey">Our</span> To-do List
  		</h1>
  		</div>
  		
  		
  		@if ($ClientSites->isEmpty())
  		        <p> Currently, there is no ClientSites! </p>
  		@else
  		  <table class="table">
  		  <thead>
  		  	<tr>
  		  	<th>#</th>
  		  	<th>Title</th>
  		  	<th>Body</th>
  		  	<th>Finish</th>
  		  </tr>
  		 </thead>
  		 	<tbody>
  		 				@foreach($ClientSites as $ClientSites)
  		 				        <tr>
  		 				        <td>{{ $ClientSites->clientID }} </td>
  		 				        <td>
  		 				        	<a href ="{{ action('ClientSitesController@show', $ClientSites->clientID) }}">
  		 				        	{{ $ClientSites->siteName }} </a>
  		 				        	
  		 				        	</td>
  		 				        <td>{{ $ClientSites->description }} </td>
  		 				        <td>{{ $ClientSites->launchDate }} </td>
  		 				        <td>
  		 				        	<a href="{{ action('ClientSitesController@edit',$ClientSites->clientID) }}"
  		 				        		class="btn btn-info">Edit</a>
  		 				        		
  		 				        		<a href="{{ action('ClientSitesController@delete',$ClientSites->clientID) }}"
  		 				        		class="btn btn-info">Delete</a>
  		 				        		
  		 				        </td>
  			 					</tr>
  			 			@endforeach
  			   </tbody>
  			  </table>
  			  @endif
  			       </div>
  			       
  			    </div>
  			       </section>
@stop
  			 					
  	
