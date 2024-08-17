@extends('front.layouts.master')

@section('title') {{$blog->title}} @endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>{{$blog->title}}</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li>
                                <a href="{{route('blogs')}}">{{__('website.blogs')}}</a>
                            </li>
                            <li class="active">{{$blog->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//==Blog Detail Page Start==//-->
    <section class="page_single blogs_main blogs_details padTB100">
        <div class="container">
            <div class="row">
                <!--//==Blog Detail Section Start==//-->
                <div class="col-md-9 col-sm-8  col-xs-12 pull-right">
                    <div class="col-md-12 marB20">
                        <div class="row">
                            <!--//==Thumbnail==//-->
                            <figure class="dark-theme">
                                <img src="{{$blog->getImage()}}" alt="{{$blog->title}}">
                            </figure>
                            <!--//==Blog Content Start==//-->
                            <div class="block-caption padT20">
                                <h4>{{$blog->title}}</h4>
                                <!--//==Author Detail==//-->
                                <div class="meta-block">
                                    <ul class="inline">
                                        <li><a href="javascript:void(0);"><i class="fa fa-calendar" aria-hidden="true"></i> {{$blog->created_at->format('d M Y')}} </a></li>
                                    </ul>
                                </div>
                                <p>{{$blog->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//==Blog Detail Section End==//-->
                <!--//======Sidebar Start=======//-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="sidebar">
                            <div class="col-md-12">
                                <!--widget-->
                                <div class="widget">
                                    <h4>recent posts</h4>
                                    <div class="twitter-box box-with-top-button mobile-collapse">
                                        <ul class="latest-posts latest-twitts">
                                            <li>
                                                <div class="post-details">
                                                    <div class="description">
                                                        <a href="#"><span class="titles"><img src="{{URL::asset('front/assets')}}/img/product/1m.jpg" width="40" height="40" alt="">scrambled it to make  </span></a>
                                                        <p>galley type scrambled it to make type Nam and sheets Mauris pulvinar</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-details">
                                                    <div class="description">
                                                        <a href="#"><span class="titles"><img src="{{URL::asset('front/assets')}}/img/product/2m.jpg" width="40" height="40" alt=""> scrambled it to make  </span></a>
                                                        <p>galley type scrambled it to make type Nam and sheets Mauris pulvinars</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>product categories</h4>
                                    <!--//==Item List Start==//-->
                                    <ul class="links-lists">
                                        <li class=""><a href="#">Wooden Hammers </a></li>
                                        <li class="collapse-link">
                                            <a>Electrical Products <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                            <ul class="links-lists sub-list">
                                                <li class=""><a href="#"> Type and scrambled</a></li>
                                                <li><a href="#">Article Real Times</a></li>
                                                <li><a href="#">Simply dummy text</a></li>
                                                <li><a href="#">Printing and typesetting</a></li>
                                            </ul>
                                        </li>
                                        <li class="collapse-link">
                                            <a>Real Goods <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                            <ul class="links-lists sub-list">
                                                <li class=""><a href="#"> Type and scrambled</a></li>
                                                <li><a href="#">Article Real Times</a></li>
                                                <li><a href="#">Simply dummy text</a></li>
                                                <li><a href="#">Printing and typesetting</a></li>
                                            </ul>
                                        </li>
                                        <li class="collapse-link">
                                            <a>T-shirts <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                            <ul class="links-lists sub-list">
                                                <li class=""><a href="#"> Type and scrambled</a></li>
                                                <li><a href="#">Article Real Times</a></li>
                                                <li><a href="#">Simply dummy text</a></li>
                                                <li><a href="#">Printing and typesetting</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--//==Item List End==//-->
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>latest product</h4>
                                    <div class="row text-center">
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/1m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/2m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/3m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/4m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/3m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                        <!--//==Item Start==//-->
                                        <div class="sidebar-post">
                                            <div class="wa-theme-design-block strict-no-border">
                                                <figure class="dark-theme">
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/4m.jpg" alt="Thumbnail"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <!--//==Item End==//-->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//======Sidebar End=======//-->
            </div>
        </div>
    </section>
    <!--//==Blog Detail Page End==//-->
@endsection
