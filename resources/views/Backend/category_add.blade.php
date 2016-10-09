@extends('backend.partials.layout')
@section('content')

<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Categories </li>
                  <li class="active">Add Categories </li>
                </ol>
            </div><!--/breadcrums-->
            <!--form-->
               <div class="signup-form col-md-3 col-md-offset-4"><!--sign up form-->
                        <h2>Categories/Add Categories</h2>
                       <form role="form" action="category_main">
                        <div class="form-group"> 
                        <label for="name">Category Title: </label>
                        <input type="text" class="form-control" id="name" placeholder="choose..."> </div> 
                       <label> Is Visible:</label>
                         
                              True:
                                <input type="radio" name="radio">
                        

                        
                             False:
                                <input type="radio" name="radio">
                        
                        <div class="form-group"> 
                        <label for="inputfile">Choose Icon:</label> 
                        <input type="file" id="inputfile" name="Upload"> 
                        <div class="thumbnail">
                     <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
                   class="img-responsive">
                        <div class="caption">
                          <h3>Thumbnail label</h3>
                       </div>
                   </div>
                     
                   <div class="row">
                       <ul class="nav">
                       <li> <button type="submit" class="btn btn-default">Add</button> 
                       </li>
                       <br>
                        <li><button type="submit" class="btn btn-default">Cancel</button> 
                       </li>
                       </ul>
                        </div>
                      </form>
                    </div>
                    </div>
            </div>
        <!--/form-->
        @endsection
