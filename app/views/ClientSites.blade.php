@extends('layout')
@section('content')
			<section class="header section-padding">
					<div class="background">&nbsp;</div>
					<div class="container">
						<div class="header-text">
								<h1>Learning Laravel: the easiest Way</h1>
								<p>
								Showing a single ClientSites<br /> using route parameter
								</p>
						</div>
					</div>
				</section>
			<div class="container">
					<section class="section-padding">
					<div class="jumbotron text-center">
						
					<div class="panel panel-default"
				<div class="panel-heading">
					<h1><span class="grey"> ClientSites</span> {{ $ClientSites->clientID }}
					</h1>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>SiteName</th>
							<th>Description</th>
							<th>LaunchDate</th>
							<th>Control</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>{{ $ClientSites->clientID}}</td>
							<td>{{ $ClientSites->siteName}}</td>
								<td>{{ $ClientSites->description}}</td>
									<td>{{ $ClientSites->launchDate}}</td>
									<td>
										<a href="{{ action('ClientSitesController@edit',
										 $ClientSites->clientID) }}" class="btn">Edit</a>
										 <a href="{{ action('ClientSitesController@delete',
										 $ClientSites->clientID) }}" class="btn">Delete</a>
										 
									</td>
						</tr>
					</tbody>
				</table>
				</div>
				
				</div>
		</section>	
		</div>
@stop	
