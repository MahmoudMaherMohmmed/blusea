@extends('dashboard.layouts.master')

@section('title')
    {{__('collections.plural')}}
@endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.products') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a
                        href="{{ route('admin.collections.index') }}">{{ __('collections.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $collection->title }}</span>
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
                                <th scope="row">{{ __('collections.attributes.id') }}</th>
                                <td>{{$collection->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('collections.attributes.title') }}</th>
                                <td>{{$collection->title}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('collections.attributes.description') }}</th>
                                <td>{!! $collection->description !!}</td>
                            </tr>
                            @if($collection->products->isNotEmpty())
                                <tr>
                                    <th scope="row">{{ __('products.plural') }}</th>
                                    <td>
                                        @foreach($collection->products as $product)
                                            <span class="badge badge-primary">{{$product->title}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <th scope="row">{{ __('collections.attributes.created_at') }}</th>
                                <td>{{$collection->created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('collections.attributes.image') }}</th>
                                <td><img class="brround" height="200px" width="200px" src="{{$collection->getImage()}}">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('collections.actions.plural') }}</th>
                                <td>
                                    @include('dashboard.collections.partials.actions.edit')
                                    {{--@include('dashboard.collections.partials.actions.delete')--}}
                                </td>
                                {{--@include('dashboard.collections.partials.models.delete')--}}
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
