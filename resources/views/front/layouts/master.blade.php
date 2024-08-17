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
                                    <select onchange="location = this.value;">
                                        <option></option>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            @if(app()->getLocale() != $localeCode)
                                                <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </option>
                                            @endif
                                        @endforeach
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
                                            <li><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                                            <li><a href="{{route('about')}}">{{__('website.about_us')}}</a></li>
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
                                                <a href="{{route('blogs')}}">{{__('website.blogs')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">{{__('website.contact')}}</a>
                                            </li>
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

        @yield('content')

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
                                <p><span class="rounded-icon"><i class="fa fa-map-marker"></i></span>{{$main_branch->address}}</p>
                                <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>
                                    {{$main_branch->phone_number_1}}
                                    @if($main_branch->phone_number_2)
                                        <br>{{$main_branch->phone_number_2}}
                                    @endif
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-envelope-o"></i></span>
                                    {{$main_branch->email_1}}
                                    @if($main_branch->email_2)
                                        <br>{{$main_branch->email_2}}
                                    @endif
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
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Blusea, All Rights Reserved</p>
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
