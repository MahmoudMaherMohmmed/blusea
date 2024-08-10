@extends('front.layouts.master')

@section('title') {{__('website.contact')}} @endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{URL::asset('front/assets')}}/images/corporate/pages.jpg') top;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> {{__('website.contact')}} </h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('website.contact')}}</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            <h4 class="card-title">{{__('website.get_in_touch')}}</h4>
                            <div class="custom-form mt-3">
                                <form method="post" action="{{route('contact.save_message')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('website.contact_your_name')}} <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="{{__('website.contact_name')}} :">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('website.contact_your_email')}} <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control ps-5" placeholder="{{__('website.contact_email')}} :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('website.contact_subject')}}</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" class="form-control ps-5" placeholder="{{__('website.contact_subject')}} :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('website.contact_message')}} <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="message" id="message" rows="4" class="form-control ps-5" placeholder="{{__('website.contact_message')}} :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send" class="btn btn-primary">{{__('website.contact_send_message')}}</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                            <div class="mt-3">
                                @include('front.layouts.partials.messages')
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="{{URL::asset('front/assets')}}/images/contact.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-phone rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">{{__('website.phone')}}</h5>
                            <p class="text-muted">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                            <a href="javascript:void(0)" class="read-more">{{$main_branch->telephone_number}}</a> <br>
                            <a href="javascript:void(0)" class="read-more">{{$main_branch->phone_number_1}}</a> <br>
                            <a href="javascript:void(0)" class="read-more">{{$main_branch->phone_number_2}}</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-envelope rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">{{__('website.email')}}</h5>
                            <p class="text-muted">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                            <a href="{{$main_branch->email_1}}" class="read-more">{{$main_branch->email_1}}</a> <br>
                            <a href="{{$main_branch->email_2}}" class="read-more">{{$main_branch->email_2}}</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-map-marker rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">{{__('website.location')}}</h5>
                            <p class="text-muted">{{$main_branch->address}}</p>
                            @if($main_branch->google_map != null)
                            <a href="{{$main_branch->google_map}}"
                                data-type="iframe" class="video-play-icon read-more lightbox">View on Google map</a>
                            @endif
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0">
                            <iframe src="{{$main_branch->google_map}}" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->
@endsection
