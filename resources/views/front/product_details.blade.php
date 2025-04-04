@extends('front.layouts.master')

@section('title')
    {{$product->title}}
@endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>{{$product->title}}</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li>
                                <a href="{{route('products')}}">{{__('website.products')}}</a>
                            </li>
                            <li class="active">{{$product->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=========product Detail Start=========//-->
    <section class="page_single">
        <div class="container">
            <div class="row padTB100">
                <div class="prod-info-section">
                    <div class="clearfix">
                        <!--Thumbnail Column-->
                        <div class="carousel-column col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="wa-product-main-image marB20">
                                <a href="{{$product->getMainImage()}}" class="fancybox" data-fancybox-group="group"
                                   title="{{$product->title}}">
                                    <img src="{{$product->getMainImage()}}" alt="{{$product->title}}">
                                </a>
                            </div>
                            <div id="wa-slide-image" class="owl-carousel  wa-slide-image carousel-style-1">
                                @foreach($product->getImages() as $image)
                                    <a href="{{$image->getFullUrl()}}" class="fancybox" data-fancybox-group="group"
                                       title="{{$product->title}}">
                                        <img src="{{$image->getFullUrl()}}" alt="{{$product->title}}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="outer wow fadeInRight">
                                <div class="title-box">
                                    <div class="inner marB30">
                                        <h2 class="marB10">{{$product->title}}</h2>
                                        <p class="availability in-stock">
                                            <strong>{{__('website.availability')}}
                                                :</strong><span>{{__('website.in_stock')}}</span>
                                        </p>
                                        <ul class="ratings">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                        </ul>
                                        @if($settings->product_price_status == App\Enums\ProductPriceStatusEnum::ACTIVE)
                                            <span class="price marB10">
                                                {{$product->price}} {{__('website.currency')}}
                                                @if($product->price_after_discount)
                                                    <del>{{$product->price_after_discount}} {{__('website.currency')}}</del>
                                                @endif
                                            </span>
                                        @endif
                                        <br/>
                                        {!! $product->short_description !!}
                                    </div>
                                    <div class="clear"></div>
                                    @if($product->tags->isNotEmpty())
                                        <div class="prod-options marB10">
                                            <div class="clearfix">
                                                <div class="form-group col-sm-12 padL0 quantity">
                                                    <label><strong>Tags</strong></label>
                                                    <div class="tag-list">
                                                        @foreach($product->tags as $tag)
                                                            <a class="btnlight" href="javascript:void(0);">
                                                                <i class="fa fa-tags"
                                                                   aria-hidden="true"></i> {{$tag->title}}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=========product Detail End=========//-->
    <!--//==product Description Start==//-->
    <section class="page_single padB100">
        <div class="container">
            <div class="row">
                <div class="prod-info-section">
                    <div class="clearfix">
                        <div class="col-md-12">
                            <div class="block-caption">
                                <div class="left-title">
                                    <h2>{{__('website.product_description')}} <span class="heading-border"></span></h2>
                                    <div class="clear"></div>
                                </div>
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//==product Description End==//-->
@endsection
