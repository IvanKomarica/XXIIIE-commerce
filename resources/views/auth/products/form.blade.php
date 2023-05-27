@extends('auth.layouts.master')
@isset($product)
    @section('title', __('main.editProduct') . $product->name)
@else
    @section('title', __('main.createProduct'))
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>@lang('main.editProduct')<b>{{ $product->name }}</b></h1>
        @else
            <h1>@lang('main.addProduct')</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
            @isset($product)
                action="{{ route('products.update', $product) }}"
            @else
                action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">@lang('main.code'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'code'])
                        <input type="text" class="form-control" name="code" id="code"
                            value="@isset($product){{ $product->code }}@endisset"
                        >
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('main.data.name'):</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                            value="@isset($product){{ $product->name }}@endisset"
                        >
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('main.data.name') en:</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name_en'])
                        <input type="text" class="form-control" name="name_en" id="name_en"
                            value="@isset($product){{ $product->name_en }}@endisset"
                        >
                    </div>
                </div>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">@lang('main.category')</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'category_id'])
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    @isset($product)
                                        @if($product->$category_id === $category->id)
                                            selected
                                        @endif
                                    @endisset
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group-row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('main.description')</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description'])
                        <textarea name="description" id="description" cols="72" rows="7">
                            @isset($product){{ $product->description }}@endisset
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="input-group-row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('main.description') en:</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description_en'])
                        <textarea name="description_en" id="description_en" cols="72" rows="7">
                            @isset($product){{ $product->description_en }}@endisset
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">@lang('main.picture')</label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            @lang('main.download')<input type="file" id="image" name="image" style="display: none;">
                        </label>
                    </div>
                </div>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">@lang('main.productProperties')</label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'property_id[]'])
                        <select name="property_id[]" multiple>
                            @foreach($properties as $property)
                                <option value="{{ $property->id }}"
                                    @isset($product)
                                            @if($product->properties->contrains($property->id))
                                                selected
                                            @endif
                                    @endisset
                                >
                                    {{ $property->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                @foreach(['hit' => __('main.hit'), 'new' => __('main.new'), 'recommend' => __('main.recommend')] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{ $field }}" id="{{ $field }}"
                                @if(isset($product) && $product->field === 1)
                                    checked="'chechked"
                                @endif
                            >

                        </div>
                    </div>
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
