@extends('frontend.partials.layout')
@section('content')
<!--form--> 
        <div class="container" >
            <div class="col-md-3 col-md-offset-1">
                    <div class="signup-form">
                        <h2>Reset Password</h2><br><br>
                        <form action="#">
                            <input type="text" placeholder="Enter username">
                            <br><br>
                            <a href="reset2">
                            <button type="button" class="btn btn-default">Send me Reset password link</button></a>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/form-->
@endsection