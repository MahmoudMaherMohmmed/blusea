@extends('dashboard.layouts.master')

@section('title')
    {{__('products.plural')}}
@endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.products') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a
                        href="{{ route('admin.products.index') }}">{{ __('products.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $product->title }}</span>
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
                                <th scope="row">{{ __('products.attributes.id') }}</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.title') }}</th>
                                <td>{{$product->title}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.short_description') }}</th>
                                <td>{!! $product->short_description !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.description') }}</th>
                                <td>{!! $product->description !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('categories.singular') }}</th>
                                <td>{{$product->categories()->first()?->title}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('brands.singular') }}</th>
                                <td>{{$product->brands()->first()?->title}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.price') }}</th>
                                <td>{{$product->price}} {{__('dashboard.sar')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.price_after_discount') }}</th>
                                <td>{{$product->price_after_discount}} {{__('dashboard.sar')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.special') }}</th>
                                <td>
                                    <span
                                        class="badge {{$product->special->color()}}">{{$product->special->trans()}}</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.best_seller') }}</th>
                                <td>
                                    <span
                                        class="badge {{$product->best_seller->color()}}">{{$product->best_seller->trans()}}</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.status') }}</th>
                                <td>
                                    <span
                                        class="badge {{$product->status->color()}}">{{$product->status->trans()}}</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.created_at') }}</th>
                                <td>{{$product->created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.attributes.image') }}</th>
                                <td>
                                    <img class="brround" height="200px" width="200px"
                                         src="{{$product->getMainImage()}}">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('products.actions.actions') }}</th>
                                <td>
                                    @include('dashboard.products.partials.actions.edit')
                                    @include('dashboard.products.partials.actions.delete')
                                </td>
                                @include('dashboard.products.partials.models.delete')
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
