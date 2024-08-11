@extends('dashboard.layouts.master')

@section('title') {{__('brands.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.products') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.brands.index') }}">{{ __('brands.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $brand->getTranslation('title', app()->getLocale()) }}</span>
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
                                    <th scope="row">{{ __('brands.attributes.id') }}</th>
                                    <td>{{$brand->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.attributes.title') }}</th>
                                    <td>{{$brand->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.attributes.description') }}</th>
                                    <td>{!! $brand->getTranslation('description', app()->getLocale()) !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.attributes.status') }}</th>
                                    <td> <span class="badge {{$brand->status->color()}}">{{$brand->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.attributes.created_at') }}</th>
                                    <td>{{$brand->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$brand->getImage()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('brands.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.brands.partials.actions.edit')
                                        @include('dashboard.brands.partials.actions.delete')
                                    </td>
                                    @include('dashboard.brands.partials.models.delete')
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
