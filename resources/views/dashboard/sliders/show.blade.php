@extends('dashboard.layouts.master')

@section('title') {{__('sliders.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.sliders.index') }}">{{ __('sliders.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $slider->title }}</span>
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
                                    <th scope="row">{{ __('sliders.attributes.id') }}</th>
                                    <td>{{$slider->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.title') }}</th>
                                    <td>{{$slider->title}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.subtitle') }}</th>
                                    <td>{{$slider->subtitle}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.description') }}</th>
                                    <td>{{$slider->description}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.status') }}</th>
                                    <td> <span class="badge {{$slider->status->color()}}">{{$slider->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.created_at') }}</th>
                                    <td>{{$slider->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$slider->getImage()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.sliders.partials.actions.edit')
                                        @include('dashboard.sliders.partials.actions.delete')
                                    </td>
                                    @include('dashboard.sliders.partials.models.delete')
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
