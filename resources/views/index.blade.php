@extends('layouts.master')
@section('title', __('main.title'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1 >@lang('main.all_products')</h1>
    </div>
    <div class="row justify-content-center">
        @foreach($products as $product)
            @include('partials.card', compact('product'))
        @endforeach
    </div>
@endsection
