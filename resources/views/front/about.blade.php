@extends('front.layouts.master')

@section('title')
    {{__('website.about_us')}}
@endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>{{__('website.about_us')}}</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li class="active">{{__('website.about_us')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=========About Page Start=========//-->
    <section class="page_single padTB100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">{{$settings->title}}</h4>
                    {!! $settings->description !!}
                </div>
            </div>
        </div>
    </section>
    <!--//=========About Page End=========//-->
@endsection
