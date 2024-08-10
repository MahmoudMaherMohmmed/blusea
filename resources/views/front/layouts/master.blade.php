<!DOCTYPE html>

<html lang="{{app()->getLocale()}}" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Aashi Fauctes - Html5 Template For Fauctes, Sanitary, Bathroom, Kitchen and Multipurpose E-commerce Store" />
        <meta name="author" content="webaashi.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Aashi Fauctes - Html5 Template For Fauctes, Sanitary, Bathroom, Kitchen and Multipurpose E-commerce Store</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('front/assets')}}/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="{{URL::asset('front/assets')}}/img/favicon.ico" type="image/x-icon">

        <!-- Fonts include -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Bootstrap core CSS -->
        <link href="{{URL::asset('front/assets')}}/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Plugins CSS -->
        <link href="{{URL::asset('front/assets')}}/plugins/menu/css/hover-dropdown-menu.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/plugins/fancymedia/css/jquery.fancybox.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/css/jquery-ui.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/plugins/switcher/switcher.css" rel="stylesheet" />
        <!-- Defaults CSS SETTINGS -->
        <link href="{{URL::asset('front/assets')}}/css/style.css" rel="stylesheet" />
        <!-- Template Media Query CSS -->
        <link href="{{URL::asset('front/assets')}}/css/responsive.css" rel="stylesheet" />
        <link href="{{URL::asset('front/assets')}}/css/color.css" rel="stylesheet" id="colors" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--//==Preloader Start==//-->
        <div class="preloader">
            <div class="cssload-container">
                <div class="cssload-loading">
                    <div id="object"><i class="fa fa-bath" aria-hidden="true"></i></div>
                </div>
                <h4 class="title">Loading</h4>
            </div>
        </div>
        <!--//==Preloader End==//-->
        <!--//==Header Start==//-->
        <header id="main-header">
            <!--//==Topbar Start==//-->
            <div id="top-bar" class="hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 text-left">
                            <!-- Logo Desktop-->
                            <a class="logo hidden-xs" href="{{route('index')}}">
                                <img class="site_logo" alt="Site Logo"  src="{{URL::asset('front/assets')}}/img/logo.png" />
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <form class="wa-search-bar">
                                <input type="text" name="search" placeholder="Search..">
                                <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-5 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select>
                                        <option>ENG</option>
                                        <option>DE</option>
                                        <option>GER</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==Topbar End==//-->
            <!--//==Navbar Start==//-->
            <div id="main-menu" class="wa-main-menu">
                <div class="wathemes-menu relative">
                    <div class="navbar navbar-default navbar-bg-light" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span></button>
                                        <!-- Logo -->
                                        <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="{{route('index')}}">
                                            <img class="site_logo" alt="Site Logo"  src="{{URL::asset('front/assets')}}/img/logo-2.png" />
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- Right nav Start -->
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{route('index')}}">Home</a></li>
                                            <li>
                                                <a href="#">Shop Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="collection-grid-sidebar.html">Collection Grid Sidebar</a></li>
                                                    <li><a href="collection-list-sidebar.html">Collection List Sidebar</a></li>
                                                    <li><a href="collection-grid-fullwidth.html">Collection Grid fullwidth</a></li>
                                                    <li><a href="collection-list-fullwidth.html">Collection List fullwidth</a></li>
                                                    <li><a href="product-detail.html">Product detail</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu">
                                                <a href="#" class="has-submenu">Categories <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu wv_menu_color sm-nowrap">
                                                    <li>
                                                        <!-- Home Mage Menu grids Begins -->
                                                        <div class="row">
                                                            <!-- Home Variation 1 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Kitchen</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Facucets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Crome Finish</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Sink Tap</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Luxury</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Shower</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 1 Block -->
                                                            <!-- Home Variation 2 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">bathroom</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Tub Facucets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Luxury</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Shower</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Matte Finish</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Sink</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 2 Block -->
                                                            <!-- One Page variation 1 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Outdoor</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Bath Tub</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Old Style</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Facucets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Copper</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Sink Tap</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 1 -->
                                                            <!-- One Page variation 2 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Brand</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Quia dolori</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Dimile homini</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Pulvinar risus</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Tincidunt </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Asoori Drrm</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 2 -->
                                                        </div>
                                                        <!-- Ends Home Mage Menu Block -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="404.html">404 Error page</a></li>
                                                    <li><a href="FAQ.html">FAQs</a></li>
                                                    <li><a href="login-area.html">Login Area</a></li>
                                                    <li><a href="default-page.html">Default Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">blog <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-style1.html">Blogs List Style1</a></li>
                                                    <li><a href="blog-style3.html">Blogs List Style2</a></li>
                                                    <li><a href="blog-style2.html">Blogs Grid Sidebar</a></li>
                                                    <li><a href="blog-style4.html">Blogs Grid Fullwidth</a></li>
                                                    <li>
                                                        <a href="#">Blog Detail</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="blog-single-sidebar.html">With Sidebar</a></li>
                                                            <li><a href="blog-single-full-width.html">Without Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <!-- /.Right nav  End-->
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                </div>
            </div>
            <!--//==Navbar End==//-->
        </header>
        <!--//==Header End==//-->
        <!--//=======Main Slider=======//-->
        <div class="wa_main_bn_wrap">
            <div id="home1-main-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <figure>
                        <img src="{{URL::asset('front/assets')}}/img/slider/1.jpg" class="hidden-xs hidden-sm " alt=""/>
                        <img src="{{URL::asset('front/assets')}}/img/slider/1xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <h2><span>Luxury Faucets Collections</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="{{URL::asset('front/assets')}}/img/slider/2.jpg" class="hidden-xs hidden-sm " alt=""/>
                        <img src="{{URL::asset('front/assets')}}/img/slider/2xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <h2><span>Luxury Faucets Collections</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="{{URL::asset('front/assets')}}/img/slider/3.jpg" class="hidden-xs hidden-sm" alt=""/>
                        <img src="{{URL::asset('front/assets')}}/img/slider/3xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <h2><span>Luxury Faucets Collections</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!--//=======Main Slider End=======//-->
        <!--//=======Collection Section Start=======//-->
        <section class="collection-section padT100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/collection/1.jpg" class="hidden-xs" alt=""/>
                                    <img src="{{URL::asset('front/assets')}}/img/collection/1-xs.jpg" class="hidden-sm hidden-lg hidden-md" alt=""/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>Bathroom Sink Faucets</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/collection/2.jpg" class="hidden-xs" alt=""/>
                                    <img src="{{URL::asset('front/assets')}}/img/collection/2-xs.jpg" class="hidden-sm hidden-lg hidden-md" alt=""/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>Mordern Faucets</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-4 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/collection/3.jpg" class="hidden-xs" alt=""/>
                                    <img src="{{URL::asset('front/assets')}}/img/collection/3-xs.jpg" class="hidden-sm hidden-lg hidden-md" alt=""/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>New Brand</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/collection/4.jpg" class="hidden-xs" alt=""/>
                                    <img src="{{URL::asset('front/assets')}}/img/collection/4-xs.jpg" class="hidden-sm hidden-lg hidden-md" alt=""/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>Designer Faucets</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/collection/5.jpg" class="hidden-xs" alt=""/>
                                    <img src="{{URL::asset('front/assets')}}/img/collection/5-xs.jpg" class="hidden-sm hidden-lg hidden-md" alt=""/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>Kitchen Faucets</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=======Collection Section End=======//-->
        <!--//=============product Start============//-->
        <div class="wa-products-main padTB100">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Special product <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                                tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row" id="MixItUp1">
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/11.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/7.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/10.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix " >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/9.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/8.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix " >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/6.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/12.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{URL::asset('front/assets')}}/img/product/13.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                        <del>$200</del>
                                        $100
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--//=============product End============//-->
        <!--//=======Banner Section Start=======//-->
        <section class="banners-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="latest-banners-item">
                                <div class="wa-banners">
                                    <div class="wa-banners-thumbnail item our-banners-item wa-item">
                                        <img src="{{URL::asset('front/assets')}}/img/banners/1.jpg" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-left">
                                                    <h2>Latest Collection</h2>
                                                    <div class="clear"></div>
                                                    <h3>SAVE UP TO 60% OFF</h3>
                                                    <div class="clear"></div>
                                                    <a href="collection-grid-fullwidth.html" class="theme-button marT10">view detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="latest-banners-item">
                                <div class="wa-banners">
                                    <div class="wa-banners-thumbnail item our-banners-item wa-item">
                                        <img src="{{URL::asset('front/assets')}}/img/banners/2.jpg" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-right">
                                                    <h2>Latest Collection</h2>
                                                    <div class="clear"></div>
                                                    <h3>SAVE UP TO 60% OFF</h3>
                                                    <div class="clear"></div>
                                                    <a href="collection-grid-fullwidth.html" class="theme-button marT10">view detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=======Banner Section End=======//-->
        <!--//=============Best Seller Section Start============//-->
        <div class="wa-products-main padT100 padB80">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Best Seller <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                                tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row">
                    <div id="best-seller" class="owl-carousel owl-theme carousel-style-1">
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/11.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/7.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/10.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/9.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/8.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/6.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/12.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{URL::asset('front/assets')}}/img/product/13.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                            <del>$200</del>
                                            $100
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--//=============Best Seller Section End============//-->
        <!--//=========Adverts Section Start=========//-->
        <div class="page_single banner-ads marB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <figure class="banners-border">
                            <a href="collection-grid-fullwidth.html"><img src="{{URL::asset('front/assets')}}/img/banners/3.jpg" alt="Thumbnail"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--//=========Adverts Section End=========//-->
        <!--//=========Home Blogs Start=========//-->
        <section class="blogs_main padTB100 grey-bg">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Our  Blog <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                                tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="owl-carousel owl-theme carousel-style-1" id="home-blog-carousel">
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-8.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-2.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-3.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-4.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-5.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-blog-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/all/wa-blog-6.jpg" alt="Thumbnail">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                                <p>
                                                    When an unknown printer took a galley type
                                                    scrambled it to make type Nam and  sheets
                                                    Mauris pulvinar tincidut lorem. It has only
                                                    survived five centuries
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=========Home Blogs End=========//-->
        <!--//=========Partners Start=========//-->
        <section class="wa-partners padT100 padB80">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Partners With Us<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                                tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme">
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/1.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/2.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/3.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/4.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/5.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/6.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/7.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{URL::asset('front/assets')}}/img/partner/8.jpg" alt="Thumbnail">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=========Partners End=========//-->
        <!--//=============Newsletter Start============//-->
        <section class="newsletter padB80">
            <div class="container">
                <div class="newsletter-row">
                    <div class="special-style special-style-light col-md-offset-0 pull-right">
                        <div class="bg-image" style="background-image:url('{{URL::asset('front/assets')}}/img/backgrounds/bg3.jpg');"></div>
                    </div>
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="news-letter-title">
                            <h3>Sign Up For Newsletter</h3>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <form class="wa-news-letter marT10 marB10">
                            <input type="text" name="search" placeholder="Search..">
                            <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--//=============Newsletter End============//-->
        <!--//=============Services Start============//-->
        <section class="services text-center padB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">
                                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>Free Shipping</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">
                                        <i class="fa fa-anchor" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>24/7 Support</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>Money back</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>FREE GIFT COUPONS</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=============Services End============//-->
        <!--//=========Footer Start=========//-->
        <footer id="main-footer" class="dark-footer footer-style1">
            <!--Upper Footer Block-->
            <div class="upper-footer wv_footer">
                <div class="container">
                    <div class="row pad-s15">
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Category</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Account</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget contact-widget">
                                <h4>Contact</h4>
                                <p>
                                    At vero eos et accusamus et iusto lits agnissmos ducimus.
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-map-marker"></i></span>PO Box 16122 Collins Street <br>
                                    West Victoria 8007 Australia
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>+123 456 7890 <br>
                                    +123 456 7890
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-envelope-o"></i></span>+123 456 7890<br>
                                    +123 456 7890
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Copyright Footer Block-->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row pad-s15">
                        <div class="col-md-12 copy-right text-center">
                            <p>Copyright &copy; 2017 Aashi Fauctes, All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//=========Footer End=========//-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{URL::asset('front/assets')}}/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{URL::asset('front/assets')}}/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('front/assets')}}/plugins/menu/js/hover-dropdown-menu.js"></script>
        <script type="text/javascript" src="{{URL::asset('front/assets')}}/plugins/menu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="{{URL::asset('front/assets')}}/plugins/owl-carousel/js/owl.carousel.js"></script>
        <script type="text/javascript" src="{{URL::asset('front/assets')}}/plugins/switcher/switcher.js"></script>
        <script src="{{URL::asset('front/assets')}}/js/main.js"></script>
    </body>
</html>
