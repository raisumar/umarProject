@extends('frontend.partials.layout')
@section('content')
	
		<div class="container">
			<div class="col-md-3 col-md-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button><br>
							Don't Have an account?&nbsp;<a href="signup">Sign up</a>
                            <br>
                            <br>
						</form>
					</div><!--/login form-->
				</div>
			</div>
@endsection