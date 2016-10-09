@extends('frontend.partials.layout')
@section('content')
<!--form--> 
        <div class="container" >
            <div class="col-md-3 col-md-offset-1">
                    <div class="signup-form">
                        <h2>Reset Password</h2><br><br>
                        <form action="#">
                            <input type="text" placeholder="Enter New Password">
                            <br><br>
                            <input type="text" placeholder="Re-enter New Password">
                            <br><br>
                            <a href="signup">
                            <button type="button" class="btn btn-default">Reset Password
                            </button>
                            </a> <br>
                            <a href="index">
                            <button type="button" class="btn btn-default">cancel</button></a>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/form-->
@endsection