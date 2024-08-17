@extends('front.layouts.master')

@section('title') {{__('website.contact')}} @endsection

@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>Contact us</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('index')}}">{{__('website.home')}}</a>
                            </li>
                            <li class="active">{{__('website.contact')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//==Contact Page Start==//-->
    <section class="page_single">
        <!--//==Contact Form Section Start==//-->
        <div class="container">
            <div class="row contact-bottom padTB100">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Get In Touch <span class="heading-border"></span></h2>
                        <div class="clear"></div>
                        <em>Nam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                            tristique sit amet odio sit amet aliquet.</em>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <!--//==Form Area Start==//-->
                <div class="col-md-12 left-box">
                    <div class="mt-3">
                        @include('front.layouts.partials.messages')
                    </div>
                    <form method="post" action="{{route('contact.save_message')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                    <label>{{__('website.contact_your_name')}}<span class="required red-text">*</span></label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                    <label>{{__('website.contact_your_email')}}<span class="required red-text">*</span></label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group {{$errors->has('subject') ? 'has-error' : ''}}">
                                    <label>{{__('website.contact_subject')}}<span class="required red-text">*</span></label>
                                    <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="col-sm-12">
                                <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                                    <label>{{__('website.contact_message')}}<span class="required red-text">*</span></label>
                                    <textarea name="message" class="form-control textarea-message" rows="5">{{old('message')}}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="submit" class="theme-button" value="{{__('website.contact_send_message')}}">
                                <div class="fashion_infotext"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--//==Form Area End==//-->
            </div>
        </div>
        <!--//==Contact Form Section End==//-->
        <!--//==Contact Map Section Start==//-->
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="map-area">
                    <div class="maps">
                        <iframe src="{{$main_branch->google_map}}" style="height:100%;border:0;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Contact Map Section End==//-->
    </section>
    <!--//==Contact Page End==//-->
@endsection
