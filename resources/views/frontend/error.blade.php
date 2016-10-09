@extends('frontend.partials.layout')
@section('content')
	<div class="container text-center">
		<div class="logo-404">
			<a href="index"><img src="images/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="images/404/404.png" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh...It looks like something went wrong or the page you are looking for is under Maintenance.</p>
			<h2><a href="index">Bring me back Home</a></h2>
		</div>
	</div>
@endsection