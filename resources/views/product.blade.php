@extends('layouts.master')
@section('title', __('main.product'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1>@lang('main.product'): {{ $product->name }}</h1>
    </div>
@endsection
