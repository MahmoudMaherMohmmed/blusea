@extends('front.layouts.master')

@section('title')
    {{$blog->title}}
@endsection

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
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-calendar"
                                                   aria-hidden="true"></i> {{$blog->created_at->format('d M Y')}}
                                            </a>
                                        </li>
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
                                    <h4>{{__('website.recent_post')}}</h4>
                                    <div class="twitter-box box-with-top-button mobile-collapse">
                                        <ul class="latest-posts latest-twitts">
                                            @foreach($recent_blogs as $recent_blog)
                                                <li>
                                                    <div class="post-details">
                                                        <div class="description">
                                                            <a href="{{route('blog.details', $recent_blog->slug)}}">
                                                            <span class="titles">
                                                                <img src="{{$recent_blog->getImage()}}" width="40" height="40"
                                                                     alt="{{$recent_blog->title}}">{{$recent_blog->title}}
                                                            </span>
                                                            </a>
                                                            <p>{!! \Illuminate\Support\Str::words($recent_blog->description, 7 ) !!}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.product_categories')}}</h4>
                                    <!--//==Item List Start==//-->
                                    <ul class="links-lists">
                                        @foreach($categories as $category)
                                            <li class="">
                                                <a href="{{route('products', ['$category' => $category->slug])}}">{{$category->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!--//==Item List End==//-->
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.latest_products')}}</h4>
                                    <div class="row text-center">
                                        @foreach(App\Models\Product::latest()->take(6)->get() as $product)
                                            <div class="sidebar-post">
                                                <div class="wa-theme-design-block strict-no-border">
                                                    <figure class="dark-theme">
                                                        <a href="{{route('product.details', $product->slug)}}">
                                                            <img src="{{$product->getMainImage()}}"
                                                                 alt="{{$product->title}}">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        @endforeach
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
