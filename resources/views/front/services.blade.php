@extends('front.layouts.master')

@section('title') {{__('website.services')}} @endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{URL::asset('front/assets')}}/images/corporate/pages.jpg') top;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> {{__('website.services')}} </h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('website.services')}}</li>
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
        @if($services->isNotEmpty())
        <div class="container">
            <div class="row align-items-end mb-4 pb-4">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h6 class="text-primary">{{__('website.services')}}</h6>
                        <h4 class="title mb-4">{{__('website.what_we_do')}}</h4>
                        <p class="text-muted mb-0 para-desc">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                        @foreach($services as $service)
                        <li class="nav-item">
                            <a class="nav-link rounded {{$loop->first ? 'active' : ''}}" data-bs-toggle="pill" href="#service_{{$service->id}}" role="tab" aria-controls="developing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">{{$service->title}}</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        @endforeach
                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach($services as $service)
                        <div class="tab-pane fade {{$loop->first ? 'show active' : ''}} p-4 rounded shadow" id="service_{{$service->id}}" role="tabpanel">
                            <img src="{{$service->getImage()}}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <p class="text-muted">{!! $service->description !!}</p>
                            </div>
                        </div><!--end teb pane-->
                        @endforeach
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        @endif
    </section><!--end section-->
    <!-- End -->
@endsection
