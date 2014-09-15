@extends('layout')
@section('content')

<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
         <div class="header-text">
             <h1> Laravel: The Easiest Way</h1>
             <p> Fastest way to learn developing web applications
             <br /> using Laravel 4 framework!
             </p>
             
    </div>
   </div>
</section>   

<div class="container">
  	<section class="section-padding">
  		<div class="jumbotron text-center">
  			<h1> <span class="grey"> Welcome To</span> OUR HOME</h1>
  			 <p>
  			 Wanna learn Laravel? You have found a great way to start with. 
  			 </p>
  			 
  	</div>
  <div class="jumbotron text-center">
  		<div class="row">
  			<div class="showcase-box col -md-4">
  				<div class="showcase-item">
  					<img src="{{ asset('img/icon1.png') }}" />
  						<p>
  						The most comprehensive book of Laravel
  						</p>
  				</div>
  			</div>
  			<div class="showcase-box col -md-4">
  				<div class="showcase-item">
  					<img src="{{ asset('img/icon2.png') }}" />
  						<p>
  						Building many web applications while learning
  						</p>
  				</div>
  			</div>
  			<div class="showcase-box col -md-4">
  				<div class="showcase-item">
  										<img src="{{ asset('img/icon3.png') }}"/>
  											<p> 
  											Its not just a Book, Its a great Community
  											</p>
  									</div>
  								</div>
  							</div>
  						</div>
  						
  									
  	
	
	</section>
</div>
@stop