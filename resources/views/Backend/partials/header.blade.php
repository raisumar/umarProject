 <header id="header">
            <!--header-->
            <div class="header_top">
                <!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="lead nav nav-pills">
                                    <li>
                                        <a href="#">CONTACT:&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i> +91 8898941669</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope"></i> rais.umar3@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->
            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                <br>
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="dash"><img src="images/home/logo.png" alt=""></a>
                            </div>
                       <br>
            <!--/header-middle-->
            <div class="header-bottom">
                <!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li>
                                        <a href="dash"  @if($pagetype=="dash")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="orders"  @if($pagetype=="orders")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Orders</a>
                                    </li>
                                    <li>
                                        <a href="category_main"  @if($pagetype=="category_main")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Categories</a>
                                    </li>
                                    
                                    <li>
                                        <a href="product_main"  @if($pagetype=="product_main")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Products</a>
                                    </li>

                                    <li>
                                        <a href="banners"  @if($pagetype=="banners")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Banners</a>
                                    </li>

                                    <li>
                                        <a href="staticpage"  @if($pagetype=="staticpage")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Static Pages</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mainmenu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                        <li class="dropdown">
                         <a href="#">Admin<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li>
                                                <a href="index">Logout</a>
                                            </li>
                                     </ul>
                              </li>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>