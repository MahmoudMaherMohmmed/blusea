@extends('dashboard.layouts.master')

@section('title') {{__('branches.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.branches.index') }}">{{ __('branches.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $branch->getTranslation('title', app()->getLocale()) }}</span>
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
                                    <th scope="row">{{ __('branches.attributes.id') }}</th>
                                    <td>{{$branch->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.title') }}</th>
                                    <td>{{$branch->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.address') }}</th>
                                    <td>{{$branch->getTranslation('address', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.google_map') }}</th>
                                    <td>{{$branch->google_map}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.phone_number_1') }}</th>
                                    <td>{{$branch->phone_number_1}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.phone_number_2') }}</th>
                                    <td>{{$branch->phone_number_2}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.telephone_number') }}</th>
                                    <td>{{$branch->telephone_number}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.email_1') }}</th>
                                    <td>{{$branch->email_1}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.email_2') }}</th>
                                    <td>{{$branch->email_2}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.status') }}</th>
                                    <td> <span class="badge {{$branch->status->color()}}">{{$branch->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.attributes.created_at') }}</th>
                                    <td>{{$branch->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('branches.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.branches.partials.actions.edit')
                                        @include('dashboard.branches.partials.actions.delete')
                                    </td>
                                    @include('dashboard.branches.partials.models.delete')
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
