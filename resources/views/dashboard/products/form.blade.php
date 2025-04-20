@extends('dashboard.layouts.master')

@section('title') {{__('products.plural')}} @endsection

@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{URL::asset('dashboard/assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('dashboard/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{URL::asset('dashboard/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
    <style>
        .remove {
            position: relative;
            float: left;
            top: 40px;
            left: 13px;
            border: 1px solid;
            font-size: 25px;
            border-radius: 50%;
            background-color: #f44336;
            color: #fff !important;
        }
    </style>
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.products') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ <a href="{{ route('admin.products.index') }}">{{ __('products.plural') }}</a></span>
                @if($product!=null)
                    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$product->title}}</span>
                @endif
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ $product!=null ? __('products.actions.edit') : __('products.actions.create') }}</span>
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
                    <form method="post" action="{{$product!=null ? route('admin.products.update', $product->id) : route('admin.products.store')}}" enctype="multipart/form-data" data-parsley-validate="">
                        @csrf
                        @if($product!=null) @method('PUT') @endif
                        <div class="row row-sm">

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.title') }} <span class="tx-danger">*</span></label>
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
                                                            <input class="form-control" name="title[{{ $localeCode }}]" placeholder="{{ __('products.attributes.title') }}" value="{{old('title.' . $localeCode, $product?->getTranslation('title', $localeCode))}}" type="text" required>
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
                                    <label class="form-label">{{ __('products.attributes.short_description') }}<span class="tx-danger">*</span></label>
                                    <div class="example">
                                        <div class="panel panel-primary tabs-style-1">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs main-nav-line">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <li class="nav-item"><a href="#tab-short-description-{{ $localeCode }}" class="nav-link {{$loop->first ? 'active' : ''}}" data-toggle="tab">{{ $properties['native'] }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                                <div class="tab-content">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="tab-short-description-{{ $localeCode }}">
                                                            <textarea class="form-control" name="short_description[{{ $localeCode }}]" placeholder="{{ __('products.attributes.short_description') }}"
                                                                      rows="4" required>{{old('short_description.' . $localeCode, $product?->getTranslation('short_description', $localeCode))}}</textarea>
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
                                    <label class="form-label">{{ __('products.attributes.description') }}<span class="tx-danger">*</span></label>
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
                                                            <textarea class="form-control" name="description[{{ $localeCode }}]" placeholder="{{ __('products.attributes.description') }}"
                                                            rows="7" required>{{old('description.' . $localeCode, $product?->getTranslation('description', $localeCode))}}</textarea>
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
                                    <label class="form-label">{{ __('categories.singular') }} <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="category_id" required="">
                                        <option selected disabled>{{__('categories.select')}}</option>
                                        @foreach(App\Models\Category::all() as $category)
                                            <option value="{{$category->id}}" {{$product!=null && $product->categories()->where('category_id', $category->id)->exists() ? 'selected' : ''}}> {{ $category->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('brands.singular') }} <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="brand_id" required="">
                                        <option selected disabled>{{__('brands.select')}}</option>
                                        @foreach(App\Models\Brand::all() as $brand)
                                            <option value="{{$brand->id}}" {{$product!=null && $product->brands()->where('brand_id', $brand->id)->exists() ? 'selected' : ''}}> {{ $brand->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.price') }} <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="price" placeholder="{{ __('products.attributes.price') }}" value="{{old('price', $product?->price)}}" required="" type="number">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.price_after_discount') }}</label>
                                    <input class="form-control" name="price_after_discount" placeholder="{{ __('products.attributes.price_after_discount') }}" value="{{old('price_after_discount', $product?->price_after_discount)}}" type="number">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.special') }} <span class="tx-danger">*</span></label>
                                    <select class="form-control select2-no-search" name="special" required="">
                                        @foreach(App\Enums\ProductSpecialEnum::options() as $key=>$value)
                                            <option value="{{$key}}" {{$product!=null && $product->special->value==$key ? 'selected' : ''}}> {{ $value }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.best_seller') }} <span class="tx-danger">*</span></label>
                                    <select class="form-control select2-no-search" name="best_seller" required="">
                                        @foreach(App\Enums\ProductBestSellerEnum::options() as $key=>$value)
                                            <option value="{{$key}}" {{$product!=null && $product->best_seller->value==$key ? 'selected' : ''}}> {{ $value }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('tags.plural') }} <span class="tx-danger">*</span></label>
                                    <div class="example">
                                        <div class="panel panel-primary tabs-style-1">
                                            @if($product!=null && $product->tags()->count()>0)
                                                @foreach($product->tags as $tag)
                                                    <div class="row" id="tag">
                                                        <div class="col-5">
                                                            <div class="form-group">
                                                                <label class="form-label">{{ __('tags.attributes.title_ar') }} <span class="tx-danger">*</span></label>
                                                                <input class="form-control" name="tags[ar][]" placeholder="{{ __('tags.attributes.title_ar') }}" value="{{$tag->getTranslation('title', 'ar')}}" type="text" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-5">
                                                            <div class="form-group">
                                                                <label class="form-label">{{ __('tags.attributes.title_en') }} <span class="tx-danger">*</span></label>
                                                                <input class="form-control" name="tags[en][]" placeholder="{{ __('tags.attributes.title_en') }}" value="{{$tag->getTranslation('title', 'en')}}" type="text" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-2" id="tag_action" style="margin-top: 1.70rem">
                                                            @if($loop->last)
                                                                <a href="javascript:void(0)" id="add_new_tag" class="btn btn-primary">
                                                                    <i class="mdi mdi-plus"></i>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)" onclick="remove_tag(this)" class="btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="row" id="tag">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <label class="form-label">{{ __('tags.attributes.title_ar') }} <span class="tx-danger">*</span></label>
                                                            <input class="form-control" name="tags[ar][]" placeholder="{{ __('tags.attributes.title_ar') }}" type="text" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <label class="form-label">{{ __('tags.attributes.title_en') }} <span class="tx-danger">*</span></label>
                                                            <input class="form-control" name="tags[en][]" placeholder="{{ __('tags.attributes.title_en') }}" type="text" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-1" id="tag_action" style="margin-top: 1.70rem">
                                                        <a href="javascript:void(0)" id="add_new_tag" class="btn btn-primary">
                                                            <i class="mdi mdi-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.image') }} @if($product==null)<span class="tx-danger">*</span>@endif</label>
                                    <input type="file" name="image" class="dropify" data-default-file="{{$product?->getMainImage()}}" data-height="200" data-errors-position="outside" data-allowed-file-extensions="jpeg png jpg svg webp" {{$product== null ? 'required' : ''}} />
                                    <span class="text-danger" style="font-size: 11px;">
                                        {{trans(config('media.dimensions.product.message'), ['dimensions' => config('media.dimensions.product.text')])}}
                                    </span>
                                </div>
                            </div>

                            @if($product && $product->getImages()!=null)
                                <div class="row">
                                    @foreach($product->getImages() as $image)
                                        <div class="col-lg-3" id="image_{{$image->id}}">
                                            <a href="javascript:void(0);" onclick="removeImage('{{$image->id}}')"
                                               class="icon icon-close remove cursor-pointer">
                                            </a>
                                            <img src="{{$image->getFullUrl()}}" class="dashboard-img" width="100%">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.images') }} <span class="tx-danger">*</span></label>
                                    <input type="file" name="images[]" class="dropify" data-height="200" data-errors-position="outside" data-allowed-file-extensions="jpeg png jpg svg webp" {{$product== null ? 'required' : ''}} multiple/>
                                    <span class="text-danger" style="font-size: 11px;">
                                        {{trans(config('media.dimensions.product.message'), ['dimensions' => config('media.dimensions.product.text')])}}
                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('products.attributes.status') }} <span class="tx-danger">*</span></label>
                                    <select class="form-control select2-no-search" name="status" required="">
                                        @foreach(App\Enums\ProductStatusEnum::options() as $key=>$value)
                                            <option value="{{$key}}" {{$product!=null && $product->status->value==$key ? 'selected' : ''}}> {{ $value }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{ $product!=null ? __('products.actions.edit') : __('products.actions.save') }}</button></div>
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
    <script>
        $(function(){
            $("#add_new_tag").on('click', function(){
                var ele = $(this).closest('#tag').clone(true).find("input").val("").end();
                $(this).closest('#tag').after(ele);

                //add new delete button
                $(this).closest('#tag').find('#tag_action').append('<a href="javascript:void(0)" onclick="remove_tag(this)" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>');

                //remove the add new button
                $(this).closest('#add_new_tag').remove();
            });
        });

        function remove_tag(ele){
            $(ele).parent().parent().remove();
        }

        function removeImage(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.products.images.destroy') }}",
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.status === true) {
                        $('#image_' + id).remove();
                    }
                }
            });
        }
    </script>
@endsection
