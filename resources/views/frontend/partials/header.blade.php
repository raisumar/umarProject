

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
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index"><img src="images/home/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-sm-push-2">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="customer-account"><i class="fa fa-user"></i> Account</a>
                                    </li>
                                    <li>
                                        <a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                                    </li>
                                    <li>
                                        <a href="login"><i class="fa fa-lock"></i> Login &nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                    <li>
                                        <a href="dash"><i class="fa fa-lock"></i> Admin Dashboard &nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <a href="index"  @if($pagetype=="index")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Home</a>
                                    </li>
                                    <li>
                                        <a href="shop"  @if($pagetype=="shop")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Shop</a>
                                    </li>
                                    <li>
                                        <a href="error"  @if($pagetype=="error")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Sales</a>
                                    </li>
                                    
                                    <li>
                                        <a href="contact-us"  @if($pagetype=="contact-us")
                                                      class="active"
                                                      @else
                                                      class="hvr-sweep-to-bottom"
                                        @endif>Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>
        <!--/header-->
		