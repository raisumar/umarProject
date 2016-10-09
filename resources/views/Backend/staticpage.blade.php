@extends('backend.partials.layout')
@section('content')


<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Static </li>
                </ol>
            </div><!--/breadcrums-->

            <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h2>Static Pages</h2>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#static_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Static Pages</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Static Page.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Page Name</th>
                      <th>Body</th>
                      <th>Url</th>
                      <th>Icon</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#2</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#4</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#6</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
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


<!--Static-->
<div class="modal fade" id="static_delete-modal" tabindex="-1" role="dialog" aria-labelledby="static_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_delete">Delete Static Page</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Static Page?</h3>
            <h4>If you delete this Static Page, you will no longer see this in the front end.</h4><br>
                      <form action="staticpage">
                          <input type="submit" name="submit" value="Delete">
                          <a href="staticpage"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="static_add-modal" tabindex="-1" role="dialog" aria-labelledby="static_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_add">Add Static Page</h4>
            </div>
            <div class="modal-body">
                      <form action="staticpage">
                          <label>Name:</label><br>
                          <input type="text" name="name"><br><br>
                          <label>Url:</label><br>
                          <input type="text" name="url"><br><br>
                          <label>Icon:</label><br>
                          <input type="file" name="icon"><br>
                          <label>Body:</label><br>
                          <textarea></textarea><br><br>
                          <input type="submit" name="submit" value="Add">
                          <a href="staticpage"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="static_edit-modal" tabindex="-1" role="dialog" aria-labelledby="static_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_edit">Edit Static Page</h4>
            </div>
            <div class="modal-body">
                      <form action="staticpage">
                          <label>Name:</label><br>
                          <input type="text" name="name"><br><br>
                          <label>Url:</label><br>
                          <input type="text" name="url"><br><br>
                          <label>Icon:</label><br>
                          <input type="file" name="icon"><br>
                          <label>Body:</label><br>
                          <textarea></textarea><br><br>
                          <input type="submit" name="submit" value="Save">
                          <a href="staticpage"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>
      </div>
<!--//Static-->
            @endsection

