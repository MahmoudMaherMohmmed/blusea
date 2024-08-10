@extends('front.layouts.master')

@section('title') {{__('website.about_us')}} @endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{URL::asset('front/assets')}}/images/corporate/pages.jpg') top;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> {{__('website.about_us')}} </h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('website.about_us')}}</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container mt-60 mb-4">
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
                        <p class="text-muted">{!! $settings->description !!}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container border-top mb-5" id="portfolio">
            <div class="row">
                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/1.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/1.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/2.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/2.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/3.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/3.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/4.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/4.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/5.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/5.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mt-4 pt-2">
                    <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded h-100">
                        <div class="portfolio-box-img position-relative overflow-hidden h-100">
                            <img class="item-container img-fluid mx-auto h-100" src="{{URL::asset('front/assets')}}/images/about/6.jpeg" alt="about" />
                            <div class="overlay-work"></div>
                            <div class="icons text-center">
                                <a href="{{URL::asset('front/assets')}}/images/about/6.jpeg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <!-- Start CTA -->
        <section class="section bg-cta" style="background: url('{{URL::asset('front/assets')}}/images/logistics/cta.jpg') center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="title-heading">
                            <img src="{{URL::asset('front/assets')}}/images/logo-light.png" height="67" alt="">
                            <h4 class="heading title-dark text-white my-4">World’s Leading Contract <br> Logistics Provider</h4>
                            <p class="text-white-50 para-dark para-desc mx-auto">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End CTA -->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class="text-primary">Work Process</h6>
                        <h4 class="title mb-4">How do we works ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-presentation-edit rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Discussion</h5>
                            <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Strategy & Testing</h5>
                            <p class="text-muted mb-0">Generators convallis odio, vel pharetra quam malesuada vel. Nam porttitor malesuada.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-image-check rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Reporting</h5>
                            <p class="text-muted mb-0">Internet Proin tempus odio, vel pharetra quam malesuada vel. Nam porttitor malesuada.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
