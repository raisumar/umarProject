@extends('frontend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li>
                <a href="index">Home</a>
              </li>
              <li>My wishlist</li>
            </ul>
          </div>
          <div class="col-md-3">
            <!-- *** CUSTOMER MENU *** _________________________________________________________
            -->
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading">
                <h3 class="panel-title">Customer section</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active">
                    <a href="customer-orders"><i class="fa fa-list"></i> My orders</a>
                  </li>
                  <li>
                    <a href="customer-wishlist"><i class="fa fa-heart"></i> My wishlist</a>
                  </li>
                  <li>
                    <a href="customer-account"><i class="fa fa-user"></i> My account</a>
                  </li>
                  <li>
                    <a href="index"><i class="fa fa-sign-out"></i> Logout</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.col-md-3 -->
            <!-- *** CUSTOMER MENU END *** -->
          </div>
          <div class="col-md-9" id="wishlist">
            <ul class="breadcrumb">
              <li>
                <a href="#">Home</a>
              </li>
              <li>Ladies</li>
            </ul>
            <div class="box">
              <h1>My wishlist</h1>
              <p class="lead">Your saved items.</p>
            </div>
            <div class="row products">
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product1.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product1.jpg" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Redmi</a></h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product2.jpg" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Apple</a></h3>
                    <p class="price">
                      <del>$280</del>$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product3.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product3_2.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product3.png" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Gigabyte</a>
                    </h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product3.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product3_2.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product3.png" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Gigabyte</a>
                    </h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product2.jpg" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Apple</a></h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product1.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product1.jpg" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Redmi</a></h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                  </div>
                <!-- /.product -->
              </div>
              <!-- /.col-md-4 -->
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product2.jpg" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Apple</a></h3>
                    <p class="price">
                      <del>$280</del>$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                 </div>
                <!-- /.product -->
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front">
                        <a href="product-details">

                                                <img src="img/product3.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                      <div class="back">
                        <a href="product-details">

                                                <img src="img/product3_2.png" alt="" class="img-responsive">

                                            </a>
                      </div>
                    </div>
                  </div>
                  <a href="product-details" class="invisible">

                                    <img src="img/product3.png" alt="" class="img-responsive">

                                </a>
                  <div class="text">
                    <h3>
                      <a href="product-details">Gigabyte</a>
                    </h3>
                    <p class="price">$143.00</p>
                    <p class="buttons">
                      <a href="product-details" class="btn btn-default">View Details</a>
                      <a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                  <!-- /.text -->
                </div>
                <!-- /.product -->
              </div>
            </div>
            <!-- /.products -->
          </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /#content -->
@endsection