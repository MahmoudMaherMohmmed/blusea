
@extends('front.layouts.master')

@section('title') {{__('website.home')}} @endsection

@section('content')
    @if($sliders->isNotEmpty())
    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="{{$slider->getImage()}}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h1 class="display-5 text-white title-dark fw-bold mb-4">{{$slider->title}}</h1>
                                        <p class="para-desc mx-auto text-white-50">{{$slider->description}}</p>

                                        <div class="mt-4 pt-2">
                                            <a href="{{route('contact')}}" class="btn btn-primary">{{__('website.contact')}}</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next rounded-circle text-center"></div>
            <div class="swiper-button-prev rounded-circle text-center"></div>
        </div><!--end container-->
    </section><!--end section-->
    @endif

    <!-- FEATURES START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="features-absolute">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="card features feature-primary feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-phone rounded h3 mb-0 mx-auto"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">{{__('website.phone')}}</a></h5>
                                        <p class="text-muted">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                                        <p class="text-muted">{{$main_branch->phone_number_1}}{{$main_branch->phone_number_2 != null ? ' / ' . $main_branch->phone_number_2 : ''}}</p>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-md-0 pt-2 pt-md-0">
                                <div class="card features feature-primary feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-envelope rounded h3 mb-0 mx-auto"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">{{__('website.email')}}</a></h5>
                                        <p class="text-muted">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                                        <a href="mailto:{{$main_branch->email_1}}" class="read-more">{{$main_branch->email_1}}</a>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card features feature-primary feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-map-marker rounded h3 mb-0 mx-auto"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">{{__('website.location')}}</a></h5>
                                        <p class="text-muted">{{$main_branch->address}}</p>
                                        @if($main_branch->google_map != null)
                                            <a href="{{$main_branch->google_map}}" data-type="iframe" class="video-play-icon read-more lightbox">{{__('website.view_on_google_map')}}</a>
                                        @endif
                                        <p></p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="{{URL::asset('front/assets')}}/images/logistics/about.png" class="rounded img-fluid mx-auto d-block" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-4">
                        <h6>{{__('website.about_us')}}</h6>
                        <h4 class="title mb-4">{{__('website.powerful_features_of')}} <br> <span class="text-primary">{{$settings->title}}</span></h4>
                        <p class="text-muted">{!! $settings->short_description !!}</p>
                        <a href="{{route('about')}}" class="btn btn-primary mt-3">{{__('website.read_more')}} <i class="uil uil-angle-right-b"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="py-5" style="background: url('{{URL::asset('front/assets')}}/images/svg-map.svg');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <span class="clip-text clip-text-image text-uppercase fw-bold" style="background-image: url('{{URL::asset('front/assets')}}/images/logistics/01.jpg');">{{$settings->title}}</span>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div><!--end container-->
    </section><!--end section-->

    @if($services->isNotEmpty())
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">{{__('website.services')}}</h4>
                        <p class="text-muted para-desc mx-auto mb-0">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                @foreach($services as $service)
                <div class="col-lg-3 col-md-6 mt-2 mb-2">
                    <div class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="{{$service->icon}} rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">{{$service->title}}</a>
                            <p class="text-muted mt-2">{{$service->short_description}}</p>
                            <i class="uil uil-airplay full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach

                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="{{route('services')}}" class="btn btn-primary">{{__('website.see_more')}} <i class="mdi mdi-arrow-right"></i></a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    @endif

    <!-- Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="{{URL::asset('front/assets')}}/images/cta-bg.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                        </div>
                        <div class="content mt-md-4 pt-md-2">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mt-4 pt-2">
                                            <div class="section-title text-md-start">
                                                <h6 class="text-white-50">Team</h6>
                                                <h4 class="title text-white title-dark mb-0">Meet Experience <br> Team Member</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-4 pt-md-2">
                                            <div class="section-title text-md-start">
                                                <p class="text-white-50 para-desc">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="javascript:void(0)" class="text-white title-dark">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row -->
            <div class="feature-posts-placeholder bg-primary bg-gradient"></div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    @if($blogs->isNotEmpty())
    <section class="section">
        <div class="container mt-100 mt-60">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <h6 class="text-primary">{{__('website.blogs')}}</h6>
                        <h4 class="title mb-4 mb-lg-0">{{__('website.reads_our_latest')}} <br> {{__('website.news_blog')}}</h4>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <p class="text-muted mb-0 mx-auto para-desc">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{$blog->getImage()}}" class="card-img-top rounded-top" alt="{{$blog->title}}" style="height: 250px;">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{route('blog.details', $blog->slug)}}" class="card-title title text-dark">{{$blog->title}}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="{{route('blog.details', $blog->slug)}}" class="text-muted readmore">{{__('website.read_more')}} <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="date"><i class="uil uil-calendar-alt"></i> {{$blog->created_at->format('d M Y')}}</small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    @endif
@endsection
