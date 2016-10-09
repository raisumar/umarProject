@extends('frontend.partials.layout')
@section('content')
     <!--form-->	
		<div class="container" >
			<div class="col-md-3 col-md-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>Signup!</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
                            <input type="text" placeholder="Phone Number"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/><br>
							<button type="submit" class="btn btn-default">Signup</button>
                            <br>
                            &nbsp;<a href="reset1">Forgot Password </a>
                            <br>
                            <br>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/form-->
@endsection