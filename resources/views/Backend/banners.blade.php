@extends('backend.partials.layout')
@section('content')


<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Banners </li>
                </ol>
            </div><!--/breadcrums-->

         <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-8">
              <h2>Banners</h2>

              </div>
              <div class="col-md-offset-1 col-md-3">
              <br><br>
              <a href="" data-toggle="modal" data-target="#banner_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Banners</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Banners.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Image Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#6</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </div>
<!-- /#content -->
            </div>
             </div>

    <!--Banners-->

<div class="modal fade" id="banner_add-modal" tabindex="-1" role="dialog" aria-labelledby="banner_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="banner_add">Add Banner</h4>
            </div>
            <div class="modal-body">
            <h4>Select an Image to add in Banner list.</h4><br>
                      <form action="banners">
                          <input type="file" name="banner"><br>
                          <input type="submit" name="submit" value="Upload">
                          <a href="banners"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="banner_delete-modal" tabindex="-1" role="dialog" aria-labelledby="banner_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="banner_delete">Delete Banner</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Banner?</h3>
            <h4>If you delete this Banner, you will no longer see this in the front end.</h4><br>
                      <form action="banners">
                          <input type="submit" name="submit" value="Delete">
                          <a href="banners"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>
<!--//Banners-->
           @endsection
