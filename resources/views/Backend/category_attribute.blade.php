@extends('backend.partials.layout')
@section('content')


<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Categories </li>
                  <li class="active">Attributes</li>
                </ol>
            </div><!--/breadcrums-->

          <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-8">
              <h2>List of Attributes for Category: Mobile</h2>
              </div>
              <div class="col-md-offset-1 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#attr_edit-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Attributes</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Attributes.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Attribute Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Brand</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td>Accessories</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#3</th>
                      <td>Miscellaneous</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>Featured</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
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

   <!--Attributes-->
    <div class="modal fade" id="attr_edit-modal" tabindex="-1" role="dialog" aria-labelledby="attr_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="attr_edit">Edit Attribute</h4>
            </div>
            <div class="modal-body">
              <form action="category_attribute">
                          <label>Attribute Name:</label>
                          <input type="text" name="attributename" value="Brand"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Accessories"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Miscellaneous"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Featured"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <a href=""><b>+</b> Add Attribute</a><br>
                          <br>
                          <input type="submit" name="submit" value="Add">
                          <a href="category_attribute"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="attr_delete-modal" tabindex="-1" role="dialog" aria-labelledby="attr_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="attr_delete">Delete Attribute</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Attribute?</h3>
            <h4>If you delete this Attribute, you will no longer see this in the front end.</h4><br>
                      <form action="category_attribute">
                          <input type="submit" name="submit" value="Delete">
                          <a href="category_attribute"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<!--//Attributes-->
               @endsection
