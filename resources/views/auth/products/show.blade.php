@extends('auth.layouts.master')
@section('title', __('main.product' . $product->name))
@section('content')
    <div class="row justify-content-center mb-5 mt-5">
        <h1>{{ $product->name }}</h1>
    </div>
    <div class="row justify-content-center">
        <table class="table-filled col-md-6">
            <tbody>
                <tr>
                    <th>@lang('main.field')</th>
                    <th>@lang('main.value')</th>
                </tr>
                <tr>
                    <td>@lang('main.id')</td>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <td>@lang('main.code')</td>
                    <td>{{ $product->code }}</td>
                </tr>
                <tr>
                    <td>@lang('main.name')</td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td>@lang('main.name') en:</td>
                    <td>{{ $product->name_en }}</td>
                </tr>
                <tr>
                    <td>@lang('main.description')</td>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <td>@lang('main.description') en:</td>
                    <td>{{ $product->description_en }}</td>
                </tr>
                <tr>
                    <td>@lang('main.picture') en:</td>
                    <td><img height="240px" src="{{ Storage::url($product->image) }}" alt=""></td>
                </tr>
                <tr>
                    <td>@lang('main.category')</td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <td>@lang('main.labels')</td>
                    <td>
                        @if($product->isNew())
                            <span class="badge badge-success">@lang('main.new')</span>
                        @endif
                        @if($product->isRecommend())
                            <span class="badge badge-warning">@lang('main.recommended')</span>
                        @endif
                        @if($product->isHit())
                            <span class="badge badge-danger">@lang('main.hit')</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
