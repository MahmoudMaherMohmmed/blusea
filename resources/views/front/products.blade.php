@extends('front.layouts.master')

@section('title')
    {{__('website.products')}}
@endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>{{__('website.products')}}</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li class="active">{{__('website.products')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=========product Page Start=========//-->
    <section class="wa-products-main padTB100">
        <div class="container">
            <div class="row">
                <!--//=========product Right Section Start=========//-->
                <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="wa-products">
                                    <div class="wa-products-thumbnail wa-item">
                                        <img src="{{$product->getMainImage()}}" alt="{{$product->title}}"
                                             height="350px">
                                    </div>
                                    <div class="wa-products-caption">
                                        <h2>
                                            <a href="{{route('product.details', $product->slug)}}">{{$product->title}}</a>
                                        </h2>
                                        {{--<div class="clear"></div>
                                        <ul class="ratings">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                        </ul>--}}
                                        <div class="clear"></div>
                                        @if($settings->product_price_status == App\Enums\ProductPriceStatusEnum::ACTIVE)
                                            <span class="price">
                                                {{$product->price}} {{__('website.currency')}}
                                                @if($product->price_after_discount)
                                                    <del>{{$product->price_after_discount}} {{__('website.currency')}}</del>
                                                @endif
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <!--//==Pagination Start==//-->
                            @if ($products->hasPages())
                                {{ $products->links() }}
                            @endif
                            <!--//==Pagination End==//-->
                        </div>
                    </div>
                </div>
                <!--//=========product Right Section End=========//-->
                <!--//=========Left Sidebar Start=========//-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="sidebar">
                            <div class="col-md-12">
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.search')}}</h4>
                                    <form method="get" action="{{route('products')}}">
                                        <div class="form-group clearfix">
                                            <input type="text" name="search"
                                                   value="{{old('search', request()->search)}}"
                                                   placeholder="{{__('website.search_products')}}">
                                        </div>
                                    </form>
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.categories')}}</h4>
                                    <!--//==Item List Start==//-->
                                    <ul class="links-lists">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{route('products', ['category' => $category->slug])}}">
                                                    <div class="clearfix">
                                                        <span class="pull-left">{{$category->title}}</span> <span
                                                            class="pull-right">({{$category->products->count()}})</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!--//==Item List End==//-->
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.brands')}}</h4>
                                    <!--//==Item List Start==//-->
                                    <ul class="links-lists">
                                        @foreach($brands as $brand)
                                            <li>
                                                <a href="{{route('products', ['brand' => $brand->slug])}}">
                                                    <div class="clearfix">
                                                        <span class="pull-left">{{$brand->title}}</span> <span
                                                            class="pull-right">({{$brand->products->count()}})</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!--//==Item List End==//-->
                                </div>
                                <!--widget-->
                                <div class="widget">
                                    <h4>{{__('website.latest_products')}}</h4>
                                    <div class="row text-center">
                                        <!--//==Item Start==//-->
                                        @foreach($latest_products as $product)
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
                                        <!--//==Item End==//-->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//=========Left Sidebar End=========//-->
            </div>
        </div>
    </section>
    <!--//=========product Page End=========//-->
@endsection
