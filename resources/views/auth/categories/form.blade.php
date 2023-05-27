@extends('auth.layouts.master')

@isset($category)
    @section('title', __('main.editCategory' . $category->name))
@else
    @section('title', __('main.createCategory'))
@endisset

@section('content')
    <div class="col-md-12">
        @isset($category)
            <h1>@lang('main.editCategory')<b>{{ $category->name }}</b></h1>
        @else
            <h1>@lang('main.addCategory')</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
            @isset($category)
            action="{{ route('categories.update', $category) }}"
            @else
            action="{{ route('categories.store') }}"
            @endisset
        >
            <div>
                @isset($category)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group-row">
                    <label for="code" class="col-sm-2 col-form-label">@lang('main.code'): </label>
                    <div class="col-sm-6">
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($category) ? $category->code : null ) }}"
                        >
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('main.data.name')</label>
                    <div class="col-sm-6">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name" value="@isset($category){{ $category->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('main.data.name') en:</label>
                    <div class="col-sm-6">
                        @error('name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name_en" id="name_en"
                            value="@isset($category){{ $category->name_en }}@endisset"
                        >
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('main.description')</label>
                    <div class="col-sm-6">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="description" id="description" cols="72" rows=7>
                            @isset($category){{ $category->description }}@endisset
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('main.description') en:</label>
                    <div class="col-sm-6">
                        @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="description_en" id="description_en" cols="72" rows="7">
                            @isset($category){{ $category->description_en }}@endisset
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">@lang('main.picture')</label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            @lang('main.upload')<input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">
                    @lang('main.save')
                </button>

            </div>
        </form>
    </div>
@endsection
