@extends('layouts.master')
@section('title', __('main.category'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1>@lang('main.category') : {{ $category->name }}</h1>
    </div>
    <p>{{ $category->description }}</p>
    <div class="row mt-5 justify-content-center">
        @foreach($category->products as $product)
            @include('partials.card', compact('product'))
        @endforeach
    </div>
@endsection
