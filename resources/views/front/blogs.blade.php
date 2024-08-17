@extends('front.layouts.master')

@section('title') {{__('website.blogs')}} @endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>{{__('website.blogs')}}</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li class="active">{{__('website.blogs')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//==Blog Page Start==//-->
    <section class="page_single blogs_main padTB100">
        <div class="container">
            <div class="row">
                <!--//==Blog list Section Start==//-->
                <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                    <!--//==Blog Item==//-->
                    @foreach($blogs as $key=>$blog)
                    <div class="wa-theme-design-block strict-no-border marB30">
                        <div class="col-md-6 col-sm-12" {{$key%2==0 ? 'pull-right' : ''}}>
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="{{$blog->getImage()}}" alt="{{$blog->title}}">
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="blog-list-caption block-caption">
                                    <h4><a href="{{route('blog.details', $blog->slug)}}">{{$blog->title}}</a></h4>
                                    <div class="meta-block">
                                        <ul class="inline">
                                            <li><a href="javascript:void(0);"><i class="fa fa-calendar" aria-hidden="true"></i> {{$blog->created_at->format('d M Y')}} </a></li>
                                        </ul>
                                    </div>
                                    <p>{{$blog->description}}</p>
                                    <a href="{{route('blog.details', $blog->slug)}}" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clear"></div>
                    <!--//==Pagination Start==//-->
                    <div class="styled-pagination padB30 text-left">
                        <ul>
                            @if ($blogs->hasPages())
                                {{ $blogs->links() }}
                            @endif
                        </ul>
                    </div>
                    <!--//==Pagination End==//-->
                </div>
                <!--//==Blog list Section End==//-->
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
                                            @foreach($recent_blogs as $recent_blog)
                                            <li>
                                                <div class="post-details">
                                                    <div class="description">
                                                        <a href="{{route('blog.details', $recent_blog->slug)}}">
                                                            <span class="titles">
                                                                <img src="{{$blog->getImage()}}" width="40" height="40" alt="{{$recent_blog->title}}">{{$recent_blog->title}}
                                                            </span>
                                                        </a>
                                                        <p>{{$blog->description}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
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
                                                    <a href="product-detail.html"><img src="{{URL::asset('front/assets')}}/img/product/4m.jpg" alt="Thumbnail"></a>
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
    <!--//==Blog Page End==//-->
@endsection
