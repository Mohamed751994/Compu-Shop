<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | CompuShop</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/') }}"><h1 style="color: #FE980F;">Compu-Shop</h1></a>
                        </div>
                        
                    </div>
        <div class="col-sm-8">
        <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                   
                  <?php
                  $customer_id = Session::get('customer_id');
                  if ($customer_id != NULL) { ?>
                    <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                  <?php }else{ ?>
                    <li><a href="{{ URL::to('/login-check') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                    <?php } ?>
                    <li><a href="{{ URL::to('/show-cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                <?php
                  $customer_id = Session::get('customer_id');
                  if ($customer_id != NULL) { ?>
                    <li><a href="{{ URL::to('/customer_logout') }}"><i class="fa fa-lock"></i> Logout</a></li> 
                <?php }else{ ?>
                   
                    <li><a href="{{ URL::to('/login-check') }}"><i class="fa fa-lock"></i> Login</a></li>
                <?php } ?>

                </ul>
            </div>
        </div>
        </div>
        </div>
        </div><!--/header-middle-->
    
<div class="header-bottom"><!--header-bottom-->
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
            <li><a href="{{ URL::to('/') }}" class="active">Home</a></li>
            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                    <li><a href="{{ URL::to('/') }}">Products</a></li>
                  <?php
                  $customer_id = Session::get('customer_id');
                  if ($customer_id != NULL) { ?>
                    <li><a href="{{ URL::to('/checkout') }}">Checkout</a></li>
                  <?php }else{ ?>
                    <li><a href="{{ URL::to('/login-check') }}">Checkout</a></li>
                    <?php } ?> 

                    <li><a href="{{ URL::to('/show-cart') }}">Cart</a></li> 
                
                </ul>
            </li> 
            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                    <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
            </li> 
            <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
        </ul>
    </div>
</div>
<div class="col-sm-3">
    <div class="search_box pull-right">
        <form action="/search" method="get">
            {{ csrf_field() }}
        <input type="search" name="search" placeholder="Search"/>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    </div>
</div>
</div>
</div>
</div><!--/header-bottom-->
    </header><!--/header-->
    
   @yield('slider')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-products-->
                <?php 
                     $all_categories = DB::table('tbl_category')->where('publication_status', 1)->get();
                     foreach($all_categories as $all_category){?>  

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="{{ URL::to('/product_by_category/'.$all_category->category_id) }}">{{ $all_category->category_name }}
                            </a></h4>
                        </div>
                    </div>

                <?php } ?>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                     <?php 
                     
                     $all_manufacturies = DB::table('tbl_manufacture')->where('publication_status', 1)->get();
                     foreach($all_manufacturies as $all_manufacture){?>      
                        <li>
                        <a href="{{ URL::to('/product_by_manufacture/'.$all_manufacture->manufacture_id) }}"> <span class="pull-right">(50)</span>
                                {{ $all_manufacture->manufacture_name }}
                        </a>
                    </li>
                 <?php } ?>        
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('frontend/images/download.jpg') }}" style="height:650px;
                            width: 250px;" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')    
                    
                    </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Compu</span>-shop</h2>
                            <p>We Are Introduce The New Technologies In All World 
                           , We Arrived to The Top.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('frontend/images/home/iframe1.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('frontend/images/home/iframe2.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('frontend/images/home/iframe3.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('frontend/images/home/iframe4.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{ asset('frontend/images/home/map.png') }}" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Quick Shop</h2>
                    <?php 
                     $all_categories = DB::table('tbl_category')->where('publication_status', 1)->get();
                     foreach($all_categories as $all_category){?>  
                     <ul class="nav nav-pills nav-stacked">
                      <li><a href="{{ URL::to('/product_by_category/'.$all_category->category_id) }}">{{ $all_category->category_name }}</a></li>
                     </ul>
                 <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Quick Manufacture</h2>
                     <?php 
                      $all_manufacturies = DB::table('tbl_manufacture')->where('publication_status', 1)->get();
                     foreach($all_manufacturies as $all_manufacture){?> 
                            <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{ URL::to('/product_by_manufacture/'.$all_manufacture->manufacture_id) }}">
                                {{ $all_manufacture->manufacture_name }}
                        </a></li>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 COMPU-SHOP Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>