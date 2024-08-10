@extends('dashboard.layouts.master')

@section('title') {{__('contacts.plural')}} @endsection

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('contacts.plural') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.contacts.index') }}">{{ __('contacts.plural') }}</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$contact->name}}</span>
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
                                    <th scope="row">{{ __('contacts.attributes.id') }}</th>
                                    <td>{{$contact->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('contacts.attributes.name') }}</th>
                                    <td>{{$contact->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('contacts.attributes.email') }}</th>
                                    <td>{{$contact->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('contacts.attributes.subject') }}</th>
                                    <td>{{$contact->subject}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('contacts.attributes.message') }}</th>
                                    <td>{{$contact->message}}</td>
                                </tr>
                                @if($contact->read_at != null)
                                    <tr>
                                        <th scope="row">{{ __('contacts.attributes.read_at') }}</th>
                                        <td style="direction: ltr;">{{$contact->read_at}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th scope="row">{{ __('contacts.attributes.created_at') }}</th>
                                    <td>{{$contact->created_at->diffForHumans()}}</td>
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
