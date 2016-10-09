@extends('backend.partials.layout')
@section('content')
<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Categories </li>
                </ol>
            </div><!--/breadcrums-->

         <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h1>Categories</h1>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#cat_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Categories</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Categories.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Category</th>
                      <th>Is Visible</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td><a href="categories_prodlist">Mobiles</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#cat_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#cat_delete-modal">Delete</a> <a href="category_attribute">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td><a href="categories_prodlist">Tablets</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="category_attribute">List Attributes</a> 
                      </td>
                    </tr>
                   <tr>
                      <th>#3</th>
                      <td><a href="categories_prodlist">Laptops</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="category_attribute">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td><a href="categories_prodlist">Motherboards</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="category_attribute">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td><a href="categories_prodlist">Processors</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="category_attribute">List Attributes</a> 
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

   <!--Categories-->
<div class="modal fade" id="cat_edit-modal" tabindex="-1" role="dialog" aria-labelledby="cat_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_edit">Edit Categories</h4>
            </div>
            <div class="modal-body">
              <form action="category_main">
                          <label>Category Title:</label>
                          <input type="text" name="categoryname"><br><br>
                          <label>Is Visible:</label><br>
                          <label>YES</label>
                          <input type="radio" name="visible_yes"><br>
                          <label>NO</label>
                          <input type="radio" name="visible_no"><br><br>
                          <label>Icon:</label>
                          <input type="file" name="pic"><br><br>
                          <input type="submit" name="submit" value="Save">
                          <a href="category_main"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="cat_delete-modal" tabindex="-1" role="dialog" aria-labelledby="cat_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_delete">Delete Category</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Category?</h3>
            <h4>If you delete this Category, you will no longer see this in the front end.</h4><br>
                      <form action="category_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="category_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="cat_add-modal" tabindex="-1" role="dialog" aria-labelledby="cat_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_add">Add Categories</h4>
            </div>
            <div class="modal-body">
              <form action="category_main">
                          <label>Category Title:</label>
                          <input type="text" name="categoryname"><br><br>
                          <label>Is Visible:</label><br>
                          <label>YES</label>
                          <input type="radio" name="visible_yes"><br>
                          <label>NO</label>
                          <input type="radio" name="visible_no"><br><br>
                          <label>Icon:</label>
                          <input type="file" name="pic"><br><br>
                          <input type="submit" name="submit" value="Add">
                          <a href="category_main"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>
<!--//Categories-->
              @endsection
