@extends('layouts.default')
@section('content')
<section class="header section-padding">
	<div class="background">$nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Delete</h1>
			<p>Delete ClientSitess page
				</p>
				
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Do you want to delete ClientSites {{ $clientsite->clientID }}? </h1>
			
			{{ Form::open(['url'=> '/delete', 'class'=>'form']) }}
			{{ Form::hidden('clientID', $clientsite->clientID) }}
			
					<div class="form=group">
				{{ Form::submit('Delete ClientSites', ['class' => 'btn btn-primary']) }}
				<a href="{{ action('ClientSitesController@home') }}"
				class="btn btn-danger"> No</a>
			</div>
			{{ Form::close() }}
	</div>		
	</section>
</div>
@stop

