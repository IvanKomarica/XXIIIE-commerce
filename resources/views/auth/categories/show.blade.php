@extends('auth.layouts.master')
@section('title', __('main.category' . $category->name))
@section('content')
    <div class="col-md-12">
        <h1>@lang('main.category') {{ $category->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>@lang('main.field')</th>
                <th>@lang('main.value')</th>
            </tr>
            <tr>
                <td>@lang('main.id')</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>@lang('main.code')</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>@lang('main.data.name')</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>@lang('main.data.name') en:</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('main.description')</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>@lang('main.description')</td>
                <td>{{ $category->description_en }}</td>
            </tr>
            <tr>
                <td>@lang('main.picture')</td>
                <td>
                    <img height="240px" src="{{ Storage::url($category->image) }}" alt="">
                </td>
            </tr>
            <tr>
                <td>@lang('main.quantity')</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
