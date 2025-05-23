<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description"
    content="Aashi Fauctes - Html5 Template For Fauctes, Sanitary, Bathroom, Kitchen and Multipurpose E-commerce Store" />
  <meta name="author" content="webaashi.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>{{ $settings->title }} | @yield('title')</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ URL::asset('front/assets') }}/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="{{ URL::asset('front/assets') }}/img/favicon.ico" type="image/x-icon">

  <!-- Fonts include -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



  <!-- Plugins CSS -->
  <link href="{{ URL::asset('front/assets') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="{{ URL::asset('front/assets') }}/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" />
  <link href="{{ URL::asset('front/assets') }}/plugins/fancymedia/css/jquery.fancybox.css" rel="stylesheet" />
  <link href="{{ URL::asset('front/assets') }}/css/jquery-ui.css" rel="stylesheet" />
  <link href="{{ URL::asset('front/assets') }}/plugins/switcher/switcher.css" rel="stylesheet" />

  @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
      rel="stylesheet">

    <link href="{{ URL::asset('front/assets') }}/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/plugins/menu/css/hover-dropdown-menu.rtl.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/css/style.rtl.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/css/responsive.rtl.css" rel="stylesheet" />
  @else
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet" />

    <link href="{{ URL::asset('front/assets') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/plugins/menu/css/hover-dropdown-menu.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/css/style.css" rel="stylesheet" />
    <link href="{{ URL::asset('front/assets') }}/css/responsive.css" rel="stylesheet" />
  @endif

  <!-- Template Media Query CSS -->
  <link href="{{ URL::asset('front/assets') }}/css/color.css" rel="stylesheet" id="colors" />

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
            <a class="logo hidden-xs" href="{{ route('index') }}">
              <img class="site_logo" alt="Site Logo" src="{{ URL::asset('front/assets') }}/img/logo.png" />
            </a>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <form method="get" action="{{ route('products') }}" class="wa-search-bar">
              <input type="text" name="search" placeholder="{{ __('website.search_products') }}">
              <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>
              </button>
            </form>
          </div>
          <div class="col-md-3 col-sm-5 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <select onchange="location = this.value;">
                  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if (app()->getLocale() == $localeCode)
                      <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                      </option>
                    @endif
                  @endforeach
                  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if (app()->getLocale() != $localeCode)
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
                  <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                  <!-- Logo -->
                  <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="{{ route('index') }}">
                    <img class="site_logo" alt="Site Logo" src="{{ URL::asset('front/assets') }}/img/logo-2.png" />
                  </a>
                </div>
                <!-- Navbar Collapse -->
                <div class="navbar-collapse collapse">
                  <!-- Right nav Start -->
                  <ul class="nav navbar-nav">
                    <li><a href="{{ route('index') }}">{{ __('website.home') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('website.about_us') }}</a></li>
                    <li class="mega-menu">
                      <a href="javascript:void(0);" class="has-submenu">{{ __('website.products') }}
                        <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                      <ul class="dropdown-menu wv_menu_color sm-nowrap">
                        <li>
                          <!-- Home Mage Menu grids Begins -->
                          <div class="row">
                            <!-- Home Categories -->
                            <div class="col-sm-6">
                              <!-- Title -->
                              <h6 class="title">{{ __('website.categories') }}</h6>
                              <!-- Links -->
                              <div class="page-links">
                                @foreach ($categories as $category)
                                  <div>
                                    <a
                                      href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->title }}</a>
                                  </div>
                                @endforeach
                              </div>
                            </div>
                            <!-- Home Categories -->
                            <!-- Home Brands -->
                            <div class="col-sm-6">
                              <!-- Title -->
                              <h6 class="title">{{ __('website.brands') }}</h6>
                              <!-- Links -->
                              <div class="page-links">
                                @foreach ($brands as $brand)
                                  <div>
                                    <a
                                      href="{{ route('products', ['brand' => $brand->slug]) }}">{{ $brand->title }}</a>
                                  </div>
                                @endforeach
                              </div>
                            </div>
                            <!-- Home Brands -->
                          </div>
                          <!-- Ends Home Mage Menu Block -->
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ route('blogs') }}">{{ __('website.blogs') }}</a>
                    </li>
                    <li>
                      <a href="{{ route('contact') }}">{{ __('website.contact') }}</a>
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
              <h4>{{ __('website.useful_links') }}</h4>
              <ul>
                <li><a href="{{ route('index') }}"><i class="fa fa-angle-double-right wv_circle"></i>
                    {{ __('website.home') }}</a></li>
                <li><a href="{{ route('about') }}"><i
                      class="fa fa-angle-double-right wv_circle"></i>{{ __('website.about_us') }}</a>
                </li>
                <li><a href="{{ route('products') }}"><i class="fa fa-angle-double-right wv_circle"></i>
                    {{ __('website.products') }}</a>
                </li>
                <li><a href="{{ route('blogs') }}"><i class="fa fa-angle-double-right wv_circle"></i>
                    {{ __('website.blogs') }}</a></li>
                <li><a href="{{ route('contact') }}"><i class="fa fa-angle-double-right wv_circle"></i>
                    {{ __('website.contact') }}</a>
                </li>
              </ul>
            </div>
          </div>
          <!--Widget Block-->
          <div class="col-md-3 col-sm-6">
            <div class="widget">
              <h4>{{ __('website.categories') }}</h4>
              <ul>
                @foreach ($categories as $category)
                  <li>
                    <a href="{{ route('products', ['category' => $category->slug]) }}">
                      <i class="fa fa-angle-double-right wv_circle"></i> {{ $category->title }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!--Widget Block-->
          <div class="col-md-3 col-sm-6">
            <div class="widget">
              <h4>{{ __('website.brands') }}</h4>
              <ul>
                @foreach ($brands as $brand)
                  <li>
                    <a href="{{ route('products', ['brand' => $brand->slug]) }}">
                      <i class="fa fa-angle-double-right wv_circle"></i> {{ $brand->title }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!--Widget Block-->
          <div class="col-md-3 col-sm-6">
            <div class="widget contact-widget">
              <h4>{{ __('website.contact') }}</h4>
              <p>{{ __('website.contact_subtitle') }}</p>
              <p>
                <span class="rounded-icon"><i class="fa fa-map-marker"></i></span>{{ $main_branch->address }}
              </p>
              <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>
                <a href="tel:{{ $main_branch->phone_number_1 }}" style="color: #b6b6b6">{{ $main_branch->phone_number_1 }}</a>
                @if ($main_branch->phone_number_2)
                  <br><a href="tel:{{ $main_branch->phone_number_2 }}" style="color: #b6b6b6">{{ $main_branch->phone_number_2 }}</a>
                @endif
              </p>
              <p><span class="rounded-icon"><i class="fa fa-envelope-o"></i></span>
                <a href="mailto:{{ $main_branch->email_1 }}" style="color: #b6b6b6">{{ $main_branch->email_1 }}</a>
                @if ($main_branch->email_2)
                  <br><a href="mailto:{{ $main_branch->email_2 }}" style="color: #b6b6b6">{{ $main_branch->email_2 }}</a>
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
            <p>Copyright &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>
              Blusea, All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--//=========Footer End=========//-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ URL::asset('front/assets') }}/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('front/assets') }}/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('front/assets') }}/plugins/menu/js/hover-dropdown-menu.js"></script>
  </script>
  <script type="text/javascript"
    src="{{ URL::asset('front/assets') }}/plugins/menu/js/jquery.hover-dropdown-menu-addon.js"></script>
  <script src="{{ URL::asset('front/assets') }}/plugins/owl-carousel/js/owl.carousel.js"></script>
  <script src="{{ URL::asset('front/assets') }}/plugins/fancymedia/js/jquery.fancybox.pack.js"></script>
  <script src="{{ URL::asset('front/assets') }}/plugins/fancymedia/js/jquery.fancybox-media.js"></script>
  <script type="text/javascript" src="{{ URL::asset('front/assets') }}/plugins/switcher/switcher.js"></script>
  @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <script src="{{ URL::asset('front/assets') }}/js/main.rtl.js"></script>
  @else
    <script src="{{ URL::asset('front/assets') }}/js/main.js"></script>
  @endif
</body>

</html>
