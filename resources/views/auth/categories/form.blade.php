@extends('auth.layouts.master')

@isset($category)
    @section('title', __('main.editCategory' . $category->name))
@else
    @section('title', __('main.createCategory'))
@endisset

@section('content')
    <div class="row justify-content-center">
        <form method="POST" class="col-md-5 mt-5 big-shadow" style="padding: 40px; border-radius: 11px" enctype="multipart/form-data"
              @isset($category)
                  action="{{ route('categories.update', $category) }}"
              @else
                  action="{{ route('categories.store') }}"
            @endisset
        >
            @isset($category)
                @method('PUT')
            @endisset
            @csrf
            <div class="form-group text-center">
                <label for="code">@lang('main.code'): <span class="text-danger h3">*</span></label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code', isset($category) ? $category->code : null ) }}" placeholder="@lang('main.code')">
                @include('auth.layouts.error', ['fieldName' => 'code'])
                {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group text-center">
                <label for="name">@lang('main.data.name'): <span class="text-danger h3">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="@isset($category){{ $category->name }}@endisset" placeholder="@lang('main.data.name')">
                @include('auth.layouts.error', ['fieldName' => 'name'])
            </div>
            <div class="form-group text-center">
                <label for="name_en">@lang('main.data.name') en: </label>
                <input type="text" class="form-control" id="name_en" name="name_en" value="@isset($category){{ $category->name_en }}@endisset" placeholder="@lang('main.data.name') en:">
                @include('auth.layouts.error', ['fieldName' => 'name_en'])
            </div>
            <div class="form-group text-center">
                <label for="description">@lang('main.description')  <span class="text-danger h3">*</span></label>
                <textarea name="description" id="description"  rows="4" cols="49">
                       @isset($category){{ $category->description  }}@endisset
                   </textarea>
                @include('auth.layouts.error', ['fieldName' => 'description'])
            </div>
            <div class="form-group text-center">
                <label for="description_en">@lang('main.description') en:</label>
                <textarea name="description_en" id="description_en" rows="4" cols="49">
                        @isset($category){{ $category->description_en }}@endisset
                    </textarea>
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
