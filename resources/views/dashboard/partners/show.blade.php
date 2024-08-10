@extends('dashboard.layouts.master')

@section('title') {{__('partners.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.partners.index') }}">{{ __('partners.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $partner->getTranslation('title', app()->getLocale()) }}</span>
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
                                    <th scope="row">{{ __('partners.attributes.id') }}</th>
                                    <td>{{$partner->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.title') }}</th>
                                    <td>{{$partner->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.description') }}</th>
                                    <td>{{$partner->getTranslation('description', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.url') }}</th>
                                    <td>{{$partner->url}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.status') }}</th>
                                    <td> <span class="badge {{$partner->status->color()}}">{{$partner->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.created_at') }}</th>
                                    <td>{{$partner->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$partner->getImage()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('partners.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.partners.partials.actions.edit')
                                        @include('dashboard.partners.partials.actions.delete')
                                    </td>
                                    @include('dashboard.partners.partials.models.delete')
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
