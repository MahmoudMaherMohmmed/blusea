@extends('dashboard.layouts.master')

@section('title') {{__('settings.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.settings.index') }}">{{ __('settings.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $setting->title }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <tbody>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.id') }}</th>
                                    <td>{{$setting->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.title') }}</th>
                                    <td>{{$setting->title}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.short_description') }}</th>
                                    <td>{!! $setting->short_description !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.description') }}</th>
                                    <td>{!! $setting->description !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.facebook_url') }}</th>
                                    <td>{{$setting->facebook_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.whatsapp_url') }}</th>
                                    <td>{{$setting->whatsapp_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.telegram_url') }}</th>
                                    <td>{{$setting->telegram_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.instagram_url') }}</th>
                                    <td>{{$setting->instagram_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.twitter_url') }}</th>
                                    <td>{{$setting->twitter_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.linkedin_url') }}</th>
                                    <td>{{$setting->linkedin_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.youtube_url') }}</th>
                                    <td>{{$setting->youtube_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.created_at') }}</th>
                                    <td>{{$setting->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$setting->getImage()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('settings.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.settings.partials.actions.edit')
                                        @if($setting->id != 1)
                                            @include('dashboard.settings.partials.actions.delete')
                                        @endif
                                    </td>
                                    @if($setting->id != 1)
                                        @include('dashboard.settings.partials.models.delete')
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
@endsection

@section('js') @endsection
