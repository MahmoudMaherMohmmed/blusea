@extends('front.layouts.master')

@section('title')
    {{__('website.home')}}
@endsection

@section('content')
    <!--//=======Main Slider=======//-->
    @if($sliders->isNotEmpty())
        <div class="wa_main_bn_wrap">
            <div id="home1-main-slider" class="owl-carousel owl-theme">
                @foreach($sliders as $slider)
                    <div class="item">
                        <figure>
                            <img src="{{$slider->getImage()}}" class="hidden-xs hidden-sm " alt="{{$slider->title}}"/>
                            <img src="{{$slider->getImage()}}" class="hidden-lg hidden-md" alt="{{$slider->title}}"/>
                            <figcaption>
                                <div class="container">
                                    <h2><span>{{$slider->title}}</span></h2>
                                    <span>{{$slider->subtitle}}</span>
                                    <p>{{$slider->description}}</p>
                                    <a href="{{route('products')}}" class="theme-button">Shop Now</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!--//=======Main Slider End=======//-->
    <!--//=======Collection Section Start=======//-->
    <section class="collection-section padT100">
        <div class="container">
            <div class="row">
                @if($collections[0])
                    <div class="col-md-8 col-sm-8">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{$collections[0]->getImage()}}" class="hidden-xs"
                                         alt="{{$collections[0]->title}}"/>
                                    <img src="{{$collections[0]->getImage()}}"
                                         class="hidden-sm hidden-lg hidden-md" alt="{{$collections[0]->title}}"/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>{{$collections[0]->title}}</h2>
                                                <div class="clear"></div>
                                                <a href="{{route('products', ['collection' => $collections[0]->slug])}}"
                                                   class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($collections[1])
                    <div class="col-md-4 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{$collections[1]->getImage()}}" class="hidden-xs"
                                         alt="{{$collections[1]->title}}"/>
                                    <img src="{{$collections[1]->getImage()}}"
                                         class="hidden-sm hidden-lg hidden-md" alt="{{$collections[1]->title}}"/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>{{$collections[1]->title}}</h2>
                                                <div class="clear"></div>
                                                <a href="{{route('products', ['collection' => $collections[1]->slug])}}"
                                                   class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($collections[2])
                    <div class="clear"></div>
                    <div class="col-md-4 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{$collections[2]->getImage()}}" class="hidden-xs"
                                         alt="{{$collections[2]->title}}"/>
                                    <img src="{{$collections[2]->getImage()}}" class="hidden-sm hidden-lg hidden-md"
                                         alt="{{$collections[2]->title}}"/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>{{$collections[2]->title}}</h2>
                                                <div class="clear"></div>
                                                <a href="{{route('products', ['collection' => $collections[2]->slug])}}"
                                                   class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($collections[3])
                    <div class="col-md-5 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{$collections[3]->getImage()}}" class="hidden-xs"
                                         alt="{{$collections[3]->title}}"/>
                                    <img src="{{$collections[3]->getImage()}}"
                                         class="hidden-sm hidden-lg hidden-md" alt="{{$collections[3]->title}}"/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>{{$collections[3]->title}}</h2>
                                                <div class="clear"></div>
                                                <a href="{{route('products', ['collection' => $collections[3]->slug])}}"
                                                   class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($collections[4])
                    <div class="col-md-3 col-sm-4">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="{{$collections[4]->getImage()}}" class="hidden-xs"
                                         alt="{{$collections[4]->title}}"/>
                                    <img src="{{$collections[4]->getImage()}}"
                                         class="hidden-sm hidden-lg hidden-md" alt="{{$collections[4]->title}}"/>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <h2>{{$collections[4]->title}}</h2>
                                                <div class="clear"></div>
                                                <a href="{{route('products', ['collection' => $collections[4]->slug])}}"
                                                   class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--//=======Collection Section End=======//-->
    <!--//=============product Start============//-->
    @if($special_products->isNotEmpty())
        <div class="wa-products-main padTB100">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>{{__('website.special_products')}} <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>{{__('website.special_products_subtitle')}}</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row" id="MixItUp1">
                    @foreach($special_products as $product)
                        <div
                            class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="{{$product->getMainImage()}}" alt="{{$product->title}}">
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="{{route('product.details', $product->slug)}}">{{$product->title}}</a>
                                    </h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    @if($settings->product_price_status == App\Enums\ProductPriceStatusEnum::ACTIVE)
                                        <span class="price">
                                            @if($product->price_after_discount)
                                                <del>{{$product->price_after_discount}} {{__('website.currency')}}</del>
                                            @endif
                                            {{$product->price}} {{__('website.currency')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    @endif
    <!--//=============product End============//-->
    <!--//=======Banner Section Start=======//-->
    @if($collections[5] && $collections[6])
        <section class="banners-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="latest-banners-item">
                                <div class="wa-banners">
                                    <div class="wa-banners-thumbnail item our-banners-item wa-item">
                                        <img src="{{$collections[5]->getImage()}}" alt="{{$collections[5]->title}}">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-left">
                                                    <h2>{{$collections[5]->title}}</h2>
                                                    <div class="clear"></div>
                                                    <h3>{{$collections[5]->description}}</h3>
                                                    <div class="clear"></div>
                                                    <a href="{{route('products', ['collection' => $collections[5]->slug])}}"
                                                       class="theme-button marT10">view detail</a>
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
                                        <img src="{{$collections[6]->getImage()}}" alt="{{$collections[6]->title}}">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-right">
                                                    <h2>{{$collections[6]->title}}</h2>
                                                    <div class="clear"></div>
                                                    <h3>{{$collections[6]->description}}</h3>
                                                    <div class="clear"></div>
                                                    <a href="{{route('products', ['collection' => $collections[6]->slug])}}"
                                                       class="theme-button marT10">view detail</a>
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
    @endif
    <!--//=======Banner Section End=======//-->
    <!--//=============Best Seller Section Start============//-->
    @if($best_seller_products->isNotEmpty())
        <div class="wa-products-main padT100 padB80">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>{{__('website.best_sellers')}} <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>{{__('website.best_sellers_subtitle')}}</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row">
                    <div id="best-seller" class="owl-carousel owl-theme carousel-style-1">
                        @foreach($best_seller_products as $product)
                            <div class="col-md-12">
                                <div class="wa-products">
                                    <div class="wa-products-thumbnail wa-item">
                                        <img src="{{$product->getMainImage()}}" alt="{{$product->title}}">
                                    </div>
                                    <div class="wa-products-caption">
                                        <h2>
                                            <a href="{{route('product.details', $product->slug)}}">{{$product->title}}</a>
                                        </h2>
                                        <div class="clear"></div>
                                        <ul class="ratings">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        @if($settings->product_price_status == App\Enums\ProductPriceStatusEnum::ACTIVE)
                                            <span class="price">
                                                @if($product->price_after_discount)
                                                    <del>{{$product->price_after_discount}} {{__('website.currency')}}</del>
                                                @endif
                                                {{$product->price}} {{__('website.currency')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    @endif
    <!--//=============Best Seller Section End============//-->
    <!--//=========Adverts Section Start=========//-->
    @if($collections[7])
        <div class="page_single banner-ads marB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <figure class="banners-border">
                            <a href="{{route('products', ['collection' => $collections[7]->slug])}}">
                                <img src="{{$collections[7]->getImage()}}" alt="{{$collections[7]->title}}">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--//=========Adverts Section End=========//-->
    <!--//=========Home Blogs Start=========//-->
    @if($blogs->isNotEmpty())
        <section class="blogs_main padTB100 grey-bg">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>{{__('website.our_blogs')}} <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>{{__('website.our_blogs_subtitle')}}</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="owl-carousel owl-theme carousel-style-1" id="home-blog-carousel">
                                @foreach($blogs as $blog)
                                    <div class="home-blog-item">
                                        <div class="col-md-12">
                                            <div class="wa-theme-design-block">
                                                <figure class="dark-theme">
                                                    <img src="{{$blog->getImage()}}" alt="{{$blog->title}}">
                                                    <span class="hover-style"></span>
                                                </figure>
                                                <div class="block-caption">
                                                    <h4>
                                                        <a href="{{route('blog.details', $blog->slug)}}">{{$blog->title}}</a>
                                                    </h4>
                                                    <p>{{$blog->description}}</p>
                                                    <a href="{{route('blog.details', $blog->slug)}}" class="read-more">
                                                        {{__('website.read_more')}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--//=========Home Blogs End=========//-->
    <!--//=========Partners Start=========//-->
    @if($partners->isNotEmpty())
        <section class="wa-partners padT100 padB80">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>{{__('website.partners')}}<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>{{__('website.partners_subtitle')}}</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme">
                                @foreach($partners as $partner)
                                    <div class="partener-item">
                                        <div class="col-md-12">
                                            <div class="wa-theme-design-block">
                                                <figure class="dark-theme">
                                                    <img src="{{$partner->getImage()}}" alt="{{$partner->title}}">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--//=========Partners End=========//-->
    <!--//=============Newsletter Start============//-->
    <section class="newsletter padB80">
        <div class="container">
            <div class="newsletter-row">
                <div class="special-style special-style-light col-md-offset-0 pull-right">
                    <div class="bg-image"
                         style="background-image:url('{{URL::asset('front/assets')}}/img/backgrounds/bg3.jpg');"></div>
                </div>
                <!--//==Section Heading Start==//-->
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="news-letter-title">
                        <h3>{{__('website.subscribe')}}</h3>
                        <div class="clear"></div>
                        <em>{{__('website.subscribe_subtitle')}}</em>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <form method="post" action="{{route('subscribe')}}" class="wa-news-letter marT10 marB10">
                        @csrf
                        <input type="email" name="email" placeholder="{{__('website.write_your_email')}}">
                        <button type="submit" class="default-btn">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </form>
                    <div class="mt-3">
                        @include('front.layouts.partials.messages')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=============Newsletter End============//-->
    <!--//=============Services Start============//-->
    @if($services->isNotEmpty())
        <section class="services text-center padB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!--//==Services Item Start==//-->
                            @foreach($services as $service)
                                <div class="col-md-3 col-sm-3">
                                    <div class="wa-box-style2">
                                        <div class="icon">
                                            <i class="fa {{$service->icon}}" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h4>{{$service->title}}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--//==Services Item End==//-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--//=============Services End============//-->
@endsection
