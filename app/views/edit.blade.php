@extends('layouts.default')
@section('content')
<section class="header section-padding">
	<div class="background">$nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Edit</h1>
			<p>Edit ClientSitess page
				</p>
				
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Edit ClientSites {{ $clientsite->clientID }}</h1>
			
			{{ Form::open(['url'=> '/edit', 'class'=>'form']) }}
			{{ Form::hidden('clientID', $clientsite->clientID) }}
			
			<div class="form=group">
				{{ Form::label('clientID', 'siteName:') }}
				{{ Form::text('siteName', $clientsite->siteName,['class' => 'form-control']) }}
			</div>
			<div class="form=group">
				{{ Form::label('description', 'description:') }}
				{{ Form::textarea('description', $clientsite->description,['class' => 'form-control']) }}
			</div>
<div class="form=group">
				{{ Form::label('launchDate', 'launchDate:') }}
				{{ Form::text('launchDate', $clientsite->launchDate,['class' => 'form-control']) }}
			</div>
			<div class="form=group">
				{{ Form::submit('Save ClientSites', ['class' => 'btn btn-primary']) }}
			</div>
			{{ Form::close() }}
	</div>		
	</section>
</div>
@stop

