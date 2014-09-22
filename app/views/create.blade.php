@extends('layout')
@section('content')
			<section class="header section-padding">
					<div class="background">&nbsp;</div>
					<div class="container">
						<div class="header-text">
								<h1>Create</h1>
								<p>
								Create Tasks Page
								</p>
						</div>
					</div>
				</section>
			<div class="container">
				<section class="section-padding">
					<div class="jumbotron text-center">
					<h1>Create A Task</h1>
					
					{{ Form::open(['url'=> '/create', 'class' => 'form']) }}
					</div>
					
					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null,['class'=>'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('body', 'Body:') }}
					{{ Form::textarea('body', null,['class'=>'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::submit('Create Task', ['class'=>'btn btn-primary']) }}
				</div>
				{{ Form::close() }}
					</div>
				</section>
			</div>
@stop
					
				