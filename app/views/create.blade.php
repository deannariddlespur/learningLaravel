@extends('layouts.default')
@section('content')
			<section class="header section-padding">
					<div class="background">&nbsp;</div>
					<div class="container">
						<div class="header-text">
								<h1>Create</h1>
								<p>
								Create ClientSitess Page
								</p>
						</div>
					</div>
				</section>
			<div class="container">
				<section class="section-padding">
					<div class="jumbotron text-center">
					<h1>Create A ClientSites</h1>
					
					{{ Form::open(['url'=> '/create', 'class' => 'form']) }}
					</div>
					
					{{ Form::label('siteName', 'siteName:') }}
					{{ Form::text('siteName', null,['class'=>'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('description', 'description:') }}
					{{ Form::textarea('description', null,['class'=>'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('launchDate', 'launchDate:') }}
					{{ Form::text('launchDate', null,['class'=>'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::submit('Create ClientSites', ['class'=>'btn btn-primary']) }}
				</div>
				{{ Form::close() }}
					</div>
				</section>
			</div>
@stop
					
				