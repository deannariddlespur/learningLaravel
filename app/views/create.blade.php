<?php
// app/view/create.blade.php
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
					
					{{ Form::open([url'=>'/create']) }}
					</div>
					
					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title') }}
				</div>
				<div>
					{{ Form::label('body', 'Body:') }}
					{{ Form::textarea('body') }}
				</div>
				<div>
					{{ Form::submit('Create Task') }}
				</div>
				{{ Form::close() }}
					</div>
				</section>
			</div>
@stop
					
				