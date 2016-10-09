@extends('frontend.partials.layout')
@section('content')
<!--form--> 
        <div class="container" >
            <div class="col-md-3 col-md-offset-1">
                    <div class="reset-form">
                        <h2>Reset Password</h2>
                        <form action="#">
                            <input type="text" placeholder="Enter username">
                            <br> <br>
                            <button type="submit" class="btn btn-default">Send me Reset password link</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/form-->
@endsection