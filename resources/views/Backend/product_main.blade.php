@extends('backend.partials.layout')
@section('content')


<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Products </li>
                </ol>
            </div><!--/breadcrums-->

          <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h2>Products</h2>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="product_add"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Products</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Products.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Price Per Unit</th>
                      <th>Quantity in Inventory</th>
                      <th>Added On</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="product_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#2</th>
                      <td>Apple</td>
                      <td>Laptops</td>
                      <td>
                        30,000
                      </td>
                      <td>
                        2,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="product_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Gigabyte</td>
                      <td>Motherboard</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="product_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="product_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="product_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
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
<!-- /#content-->
            
             </div>

 <!--Products-->

<div class="modal fade" id="product_delete-modal" tabindex="-1" role="dialog" aria-labelledby="product_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="product_delete">Delete Products</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Product?</h3>
            <h4>If you delete this Product, you will no longer see this in the front end.</h4><br>
                      <form action="product_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="product_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="product_reassign-modal" tabindex="-1" role="dialog" aria-labelledby="product_reassign" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="product_reassign">Reassign Products</h4>
            </div>
            <div class="modal-body">
            <h4>Please select a Category below to Reassign the Products to.</h4>
                      <form action="product_main">
                      <div class="control-group">
                      <label class="control-label">Reassign To:</label>
                          <div class="controls">
                            <select name="reassign" id="reassign">
                              <option value="Mobiles">Mobiles</option>
                              <option value="Tablets">Tablets</option>
                              <option value="Laptops">Laptops</option>
                              <option value="Motherboards">Motherboards</option>
                              <option value="Processor">Processor</option>
                            </select>
                             </div>
                             </div><br>
                      <input type="submit" name="submit" value="Reassign">
                      <a href="product_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>
      </div>

<!--//Products-->
            @endsection