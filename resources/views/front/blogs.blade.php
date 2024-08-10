@extends('front.layouts.master')

@section('title') {{__('website.blogs')}} @endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{URL::asset('front/assets')}}/images/corporate/pages.jpg') top;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> {{__('website.blogs')}} </h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">{{__('website.start_working_with_enjazco_that_can_provide_everything')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('website.blogs')}}</li>
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
    @if($blogs->isNotEmpty())
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2">
                    <div class="card border-0 blog blog-primary shadow overflow-hidden">
                        <img src="{{$blog->getImage()}}" class="img-fluid" alt="{{$blog->title}}" style="height: 250px;">

                        <div class="content card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted">{{$blog->created_at->format('d M Y')}}</li>
                            </ul>

                            <h5><a href="{{route('blog.details', $blog->slug)}}" class="card-title title text-dark">{{$blog->title}}</a></h5>

                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="{{route('blog.details', $blog->slug)}}" class="text-muted readmore">{{__('website.read_more')}} <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    @endif
    <!-- End -->
@endsection
