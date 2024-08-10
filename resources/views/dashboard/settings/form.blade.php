@extends('dashboard.layouts.master')

@section('title') {{__('settings.plural')}} @endsection

@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{URL::asset('dashboard/assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('dashboard/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{URL::asset('dashboard/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.settings.index') }}">{{ __('settings.plural') }}</a></span>
                @if($setting!=null)
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$setting->getTranslation('title', app()->getLocale())}}</span>
                @endif
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $setting!=null ? __('settings.actions.edit') : __('settings.actions.create') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{$setting!=null ? route('admin.settings.update', $setting->id) : route('admin.settings.store')}}" enctype="multipart/form-data" data-parsley-validate="">
                        @csrf
                        @if($setting!=null) @method('PUT') @endif
                        <div class="row row-sm">

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.title') }} <span class="tx-danger">*</span></label>
                                    <div class="example">
										<div class="panel panel-primary tabs-style-1">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs main-nav-line">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <li class="nav-item"><a href="#tab-title-{{ $localeCode }}" class="nav-link {{$loop->first ? 'active' : ''}}" data-toggle="tab">{{ $properties['native'] }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                                <div class="tab-content">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="tab-title-{{ $localeCode }}">
                                                            <input class="form-control" name="title[{{ $localeCode }}]" placeholder="{{ __('settings.attributes.title') }}" value="{{$setting!=null ? $setting->getTranslation('title', $localeCode) : old('title[$localeCode]')}}" type="text" required>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.short_description') }} <span class="tx-danger">*</span></label>
                                    <div class="example">
                                        <div class="panel panel-primary tabs-style-1">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs main-nav-line">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <li class="nav-item"><a href="#tab-short_description-{{ $localeCode }}" class="nav-link {{$loop->first ? 'active' : ''}}" data-toggle="tab">{{ $properties['native'] }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                                <div class="tab-content">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="tab-short_description-{{ $localeCode }}">
                                                            <textarea class="form-control" id="textarea" name="short_description[{{ $localeCode }}]" placeholder="{{ __('settings.attributes.short_description') }}"
                                                                      rows="5">{{$setting!=null ? $setting->getTranslation('short_description', $localeCode) : old('short_description[$localeCode]')}}</textarea>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.description') }}</label>
                                    <div class="example">
										<div class="panel panel-primary tabs-style-1">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs main-nav-line">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <li class="nav-item"><a href="#tab-description-{{ $localeCode }}" class="nav-link {{$loop->first ? 'active' : ''}}" data-toggle="tab">{{ $properties['native'] }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                                <div class="tab-content">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="tab-description-{{ $localeCode }}">
                                                            <textarea class="form-control" id="textarea" name="description[{{ $localeCode }}]" placeholder="{{ __('settings.attributes.description') }}"
                                                            rows="5">{{$setting!=null ? $setting->getTranslation('description', $localeCode) : old('description[$localeCode]')}}</textarea>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.facebook_url') }} <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="facebook_url" placeholder="{{ __('settings.attributes.facebook_url') }}" value="{{$setting!=null ? $setting->facebook_url : old('facebook_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.whatsapp_url') }} <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="whatsapp_url" placeholder="{{ __('settings.attributes.whatsapp_url') }}" value="{{$setting!=null ? $setting->whatsapp_url : old('whatsapp_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.telegram_url') }} <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="telegram_url" placeholder="{{ __('settings.attributes.telegram_url') }}" value="{{$setting!=null ? $setting->telegram_url : old('telegram_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.instagram_url') }}</label>
                                    <input class="form-control" name="instagram_url" placeholder="{{ __('settings.attributes.instagram_url') }}" value="{{$setting!=null ? $setting->instagram_url : old('instagram_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.twitter_url') }}</label>
                                    <input class="form-control" name="twitter_url" placeholder="{{ __('settings.attributes.twitter_url') }}" value="{{$setting!=null ? $setting->twitter_url : old('twitter_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.linkedin_url') }}</label>
                                    <input class="form-control" name="linkedin_url" placeholder="{{ __('settings.attributes.linkedin_url') }}" value="{{$setting!=null ? $setting->linkedin_url : old('linkedin_url')}}" type="url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.youtube_url') }}</label>
                                    <input class="form-control" name="youtube_url" placeholder="{{ __('settings.attributes.youtube_url') }}" value="{{$setting!=null ? $setting->youtube_url : old('youtube_url')}}" type="url">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('settings.attributes.image') }} <span class="tx-danger">*</span></label>
                                    <input type="file" name="image" class="dropify" data-default-file="{{$setting!=null ? $setting->getImage() : ''}}" data-height="200" />
                                </div>
                            </div>

                            <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{ $setting!=null ? __('settings.actions.edit') : __('settings.actions.save') }}</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection

@section('js')
    <!--Internal  Select2 js -->
    <script src="{{URL::asset('dashboard/assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal  Parsley.min js -->
    <script src="{{URL::asset('dashboard/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <!-- Internal Form-validation js -->
    <script src="{{URL::asset('dashboard/assets/js/form-validation.js')}}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('dashboard/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('dashboard/assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{URL::asset('dashboard/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{URL::asset('dashboard/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{URL::asset('dashboard/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{URL::asset('dashboard/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{URL::asset('dashboard/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <!-- Internal Input tags js-->
    <script src="{{URL::asset('dashboard/assets/plugins/inputtags/inputtags.js')}}"></script>

    <script src="https://cdn.tiny.cloud/1/u660t7v0ghxvvn0wj1qj99ttw5bacqox3tfx6iqmr6hoj7sr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#textarea'
        });
    </script>
@endsection
