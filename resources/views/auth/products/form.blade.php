@extends('auth.layouts.master')
@isset($product)
    @section('title', __('main.editProduct') . $product->name)
@else
    @section('title', __('main.createProduct'))
@endisset

@section('content')
    <div class="row justify-content-center mt-5 mb-5">
        @isset($product)
            <h1>@lang('main.editProduct')<b>{{ $product->name }}</b></h1>
        @else
            <h1 class="text-center">@lang('main.addProduct')</h1>
        @endisset
    </div>
    <div class="row justify-content-center">
            <form method="POST" class="col-md-5 mt-5 big-shadow" style="padding: 40px; border-radius: 11px" enctype="multipart/form-data"
                @isset($product)
                    action="{{ route('products.update', $product) }}"
                @else
                    action="{{ route('products.store') }}"
                @endisset
            >
                    @isset($product)
                        @method('PUT')
                    @endisset
                    @csrf
                <div class="form-group text-center">
                    <label for="code">@lang('main.code'): <span class="text-danger h3">*</span></label>
                    <input type="text" class="form-control" id="code" name="code" value="@isset($product){{ $product->code }}@endisset" placeholder="@lang('main.code')">
                    @include('auth.layouts.error', ['fieldName' => 'code'])
{{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group text-center">
                    <label for="name">@lang('main.data.name'): <span class="text-danger h3">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="@isset($product){{ $product->name }}@endisset" placeholder="@lang('main.data.name')">
                    @include('auth.layouts.error', ['fieldName' => 'name'])
                </div>
                <div class="form-group text-center">
                    <label for="name_en">@lang('main.data.name') en: </label>
                    <input type="text" class="form-control" id="name_en" name="name_en" value="@isset($product){{ $product->name_en }}@endisset" placeholder="@lang('main.data.name') en:">
                    @include('auth.layouts.error', ['fieldName' => 'name_en'])
                </div>
                <div class="form-group text-center">
                    <label for="category_id" >@lang('main.category')</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    @isset($product)
                                        @if($product->category_id === $category->id)
                                            selected
                                        @endif
                                    @endisset
                                >
                                    {{ $category->name }}
                                </option>
                          @endforeach
                        </select>
                    @include('auth.layouts.error', ['fieldName' => 'category_id'])
                </div>
                <div class="form-group text-center">
                    <label for="price">@lang('main.price'):  <span class="text-danger h3">*</span></label>
                    <input type="text" class="form-control" id="price" name="price" value="@isset($product){{ $product->price }}@endisset" placeholder="@lang('main.price')">
                    @include('auth.layouts.error', ['fieldName' => 'price'])
                </div>
               <div class="form-group text-center">
                   <label for="description">@lang('main.description')  <span class="text-danger h3">*</span></label>
                   <textarea name="description" id="description"  rows="4" cols="49">
                       @isset($product){{ $product->description }}@endisset
                   </textarea>
                   @include('auth.layouts.error', ['fieldName' => 'description'])
               </div>
                <div class="form-group text-center">
                    <label for="description_en">@lang('main.description') en:</label>
                    <textarea name="description_en" id="description_en" rows="4" cols="49">
                        @isset($product){{ $product->description_en }}@endisset
                    </textarea>
                </div>
               <div class="row justify-content-center">
                    @foreach(['hit' => __('main.hit'), 'new' => __('main.new'), 'recommend' => __('main.recommended')] as $field => $title)
                       <div
                           @if($field === 'recommend')
                                class="checkbox-wrapper"
                           @else
                               class="checkbox-wrapper mr-5"
                           @endif
                       >
                           <label class="checkbox">
                               <input  name="{{ $field }}" id="{{ $field }}" class="checkbox__trigger visuallyhidden" type="checkbox"
                                    @if(isset($product) && $product->field === 1)
                                        checked="'chechked"
                                    @endif
                               />
                               <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                               <p class="checkbox__textwrapper">{{ $title }}</p>
                           </label>
                       </div>
                    @endforeach
                </div>
                <div class="form-group text-center mt-4">
                    <label for="image">@lang('main.picture')</label>
                    <label class="btn btn-default btn-file">
                        @lang('main.upload') <input type="file" style="display: none;" name="image" id="image">
                    </label>
                </div>
                <button type="submit" class="button-g d-block mx-auto mt-5 text-white">@lang('main.save')</button>
            </form>
    </div>
@endsection
