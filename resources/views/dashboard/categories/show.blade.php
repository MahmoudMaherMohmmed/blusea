@extends('dashboard.layouts.master')

@section('title') {{__('categories.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.products') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.categories.index') }}">{{ __('categories.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $category->title }}</span>
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
                                    <th scope="row">{{ __('categories.attributes.id') }}</th>
                                    <td>{{$category->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.title') }}</th>
                                    <td>{{$category->title}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.description') }}</th>
                                    <td>{!! $category->description !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.type') }}</th>
                                    <td> <span class="badge {{$category->type->color()}}">{{$category->type->trans()}}</span> </td>
                                </tr>
                                @if($category->type==App\Enums\CategoryTypeEnum::SUB_CATEGORY)
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.parent_id') }}</th>
                                    <td>{{$category->parent->title}}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.status') }}</th>
                                    <td> <span class="badge {{$category->status->color()}}">{{$category->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.created_at') }}</th>
                                    <td>{{$category->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$category->getImage()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('categories.actions.actions') }}</th>
                                    <td>
                                        @include('dashboard.categories.partials.actions.edit')
                                        @include('dashboard.categories.partials.actions.delete')
                                    </td>
                                    @include('dashboard.categories.partials.models.delete')
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
