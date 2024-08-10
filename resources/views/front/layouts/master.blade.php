
<!DOCTYPE html>

<html lang="{{app()->getLocale()}}" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
    <head>
        <meta charset="utf-8">
        <title>{{$settings->title}} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Enjazco was established to supply customers and trading partners with a fully customized logistics solutions services. We pride ourselves on being a truly integrated door to door logistics solutions provider. Our excellent expertise, professional skills, global network, logistics solutions knowledge, effective management and hard worker people give us the ability to provide our customers with a fully customized door to door logistics solutions.">
        <meta name="author" content="Mahmoud Maher">
        <meta name="email" content="mahmoudmaherfcih30051994@gmail.com">
        <meta name="website" content="https://enjazco-eg.com/">
        <meta name="Version" content="v1.0.0">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{URL::asset('dashboard/assets/img/brand/favicon.png')}}">

        <!-- Css -->
        <link href="{{URL::asset('front/assets')}}/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="{{URL::asset('front/assets')}}/libs/swiper/css/swiper.min.css" rel="stylesheet">
        <link href="{{URL::asset('front/assets')}}/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
            <link href="{{URL::asset('front/assets')}}/css/bootstrap-rtl.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
        @else
            <link href="{{URL::asset('front/assets')}}/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
        @endif
        <!-- Icons Css -->
        <link href="{{URL::asset('front/assets')}}/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('front/assets')}}/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <!-- Style Css-->
        @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
            <link href="{{URL::asset('front/assets')}}/css/style-rtl.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
        @else
            <link href="{{URL::asset('front/assets')}}/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
        @endif
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar Start -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="{{route('index')}}">
                        <span class="logo-light-mode">
                            <img src="{{URL::asset('front/assets')}}/images/logo-dark.png" class="l-dark" height="67" alt="">
                            <img src="{{URL::asset('front/assets')}}/images/logo-light.png" class="l-light" height="67" alt="">
                        </span>
                        <img src="{{URL::asset('front/assets')}}/images/logo-light.png" height="67" class="logo-dark-mode" alt="">
                    </a>
                </div>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-light">
                        <li><a href="{{route('index')}}" class="sub-menu-item">{{__('website.home')}}</a></li>
                        <li><a href="{{route('about')}}" class="sub-menu-item">{{__('website.about_us')}}</a></li>
                        <li><a href="{{route('services')}}" class="sub-menu-item">{{__('website.services')}}</a></li>
                        <li><a href="{{route('blogs')}}" class="sub-menu-item">{{__('website.blogs')}}</a></li>
                        <li><a href="{{route('contact')}}" class="sub-menu-item">{{__('website.contact')}}</a></li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">{{__('website.language')}}</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if(app()->getLocale() != $localeCode)
                                        <li>
                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="sub-menu-item">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-60">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                    <a href="#" class="logo-footer">
                                        <img src="{{URL::asset('front/assets')}}/images/logo-light.png" height="67" alt="">
                                    </a>
                                    <p class="mt-4">{!! $settings->short_description !!}</p>
                                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                        @if($settings->facebook_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->facebook_url}}" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        @endif
                                        @if($settings->whatsapp_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->whatsapp_url}}" target="_blank" class="rounded"><i class="uil uil-whatsapp align-middle" title="whatsapp"></i></a></li>
                                        @endif
                                        @if($settings->telegram_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->telegram_url}}" target="_blank" class="rounded"><i class="uil uil-telegram align-middle" title="telegram"></i></a></li>
                                        @endif
                                        @if($settings->instagram_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->instagram_url}}" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        @endif
                                        @if($settings->twitter_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->twitter_url}}" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                        @endif
                                        @if($settings->linkedin_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->linkedin_url}}" target="_blank" class="rounded"><i class="uil uil-linkedin align-middle" title="linkedin"></i></a></li>
                                        @endif
                                        @if($settings->youtube_url != null)
                                            <li class="list-inline-item mb-0"><a href="{{$settings->youtube_url}}" target="_blank" class="rounded"><i class="uil uil-youtube align-middle" title="youtube"></i></a></li>
                                        @endif
                                    </ul><!--end icon-->
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">{{__('website.useful_links')}}</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="{{route('index')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('website.home')}}</a></li>
                                        <li><a href="{{route('about')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('website.about_us')}}</a></li>
                                        <li><a href="{{route('services')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('website.services')}}</a></li>
                                        <li><a href="{{route('blogs')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('website.blogs')}}</a></li>
                                        <li><a href="{{route('contact')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('website.contact')}}</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">{{__('website.newsletter')}}</h5>
                                    <p class="mt-4">{{__('website.signup_and_receive_the_latest_tips_via_email')}}</p>
                                    <form method="post" action="{{route('subscribe')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="foot-subscribe mb-3">
                                                    <label class="form-label">{{__('website.write_your_email')}} <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="{{__('website.your_email')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="{{__('website.subscribe')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mt-3">
                                        @include('front.layouts.partials.messages')
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="footer-py-30 footer-bar">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Enjazco. Design with <i class="mdi mdi-heart text-white"></i> by Mahmoud Maher.</p>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled text-sm-end mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{URL::asset('front/assets')}}/images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{URL::asset('front/assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="{{URL::asset('front/assets')}}/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="{{URL::asset('front/assets')}}/libs/swiper/js/swiper.min.js"></script>
        <!-- Lightbox -->
        <script src="{{URL::asset('front/assets')}}/libs/tobii/js/tobii.min.js"></script>
        <!-- Main Js -->
        <script src="{{URL::asset('front/assets')}}/libs/feather-icons/feather.min.js"></script>
        <script src="{{URL::asset('front/assets')}}/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{URL::asset('front/assets')}}/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>
