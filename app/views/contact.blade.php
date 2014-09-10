@extends('layout')
@section('content')
		<h1>Contact Us!</h1>
		<p>please contact us by sending a message using the form below:</p>
		{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
		{{ Form::open(array('url' => 'contact')) }}
		{{ Form::label('subject') }}
		{{ Form::text('subject','Enter your subject') }}
		<br />
		{{ Form::label('message') }}
		{{ Form::textarea('message', 'Enter your message') }}
		<br />
		{{ Form::submit() }}
		{{ Form::close() }}
		



@stop