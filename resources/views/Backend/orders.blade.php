@extends('backend.partials.layout')
@section('content')


<!--breadcrums-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Admin</a></li>
                  <li class="active">Orders</li>
                </ol>
            </div><!--/breadcrums-->

         
             <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="signup-form col-md-4">
              <h2> Your Orders</h2>
              </div>
              <div class="col-md-8">
              <label>Date: From-To:</label>
              <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />

              <script type="text/javascript">
              $(function() {
                  $('input[name="daterange"]').daterangepicker();
              });
              </script>
              </div>
              </div>
              <hr>
              <form>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Order No.</th>
                      <th>Username</th>
                      <th>Ordered On</th>
                      <th>Payment Type</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1734</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1733</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-success">Credit Card</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1729</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-warning">Cash On Delivery</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /#content -->
             </div>
             <script type="text/javascript">
            $('input[name="daterange"]').daterangepicker(
{
    locale: {
      format: 'DD-MM-YYYY'
    },
    startDate: '2013-01-01',
    endDate: '2013-12-31'
}, 
function(start, end, label) {
    alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
});
        </script>
            @endsection

