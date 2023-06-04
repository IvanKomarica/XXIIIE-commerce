@extends('layouts.master')
@section('title', __('main.title'))
@section('content')
    <div class="row justify-content-center mb-5 mt-5">
        <h1 class="mb-5">@lang('main.all_products')</h1>
    </div>
    <form class="mb-5" method="GET" action="{{ route('index') }}">
        <div class="d-flex justify-content-center  align-items-center">
            <label class="form-row align-items-center" for="price_from">@lang('main.price_from')
                <input style="height: 40px" class="form-control input-sm col ml-2  " type="text" name="price_from"
                       id="price_from" size="6" value="{{ request()->price_from }}">
            </label>
            <label class="form-row align-items-center ml-4" for="price_to">@lang('main.to')
                <input style="height: 40px" class="form-control form-control-sm col ml-2  " type="text" name="price_to"
                       id="price_to" size="6" value="{{ request()->price_from }}">
            </label>
            <div
                class="checkbox-wrapper ml-5"
            >
                <label class="checkbox">
                    <input name="hit" class="checkbox__trigger visuallyhidden" type="checkbox"
                           @if(request()->has('hit')) checked @endif
                    />
                    <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px"
                                       viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                    <p class="checkbox__textwrapper">{{ __('main.properties.hit') }}</p>
                </label>
            </div>
            <div
                class="checkbox-wrapper ml-5"
            >
                <label class="checkbox">
                    <input name="recommend" class="checkbox__trigger visuallyhidden" type="checkbox"
                           @if(request()->has('recommend')) checked @endif
                    />
                    <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px"
                                       viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                    <p class="checkbox__textwrapper">{{ __('main.properties.recommend') }}</p>
                </label>
            </div>
            <div
                class="checkbox-wrapper ml-5"
            >
                <label class="checkbox">
                    <input name="new" class="checkbox__trigger visuallyhidden" type="checkbox"
                           @if(request()->has('new')) checked @endif
                    />
                    <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px"
                                       viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                    <p class="checkbox__textwrapper">{{ __('main.properties.new') }}</p>
                </label>
            </div>
            <button type="submit" class="button-b ml-5">
                @lang('main.filter')
            </button>
            <a href="{{ route('index') }}" class="button-o ml-2">@lang('main.reset')</a>
        </div>

    </form>
    <div class="row justify-content-center">
        @foreach($products as $product)
            @include('partials.product_card', ['product' => $product])
        @endforeach
    </div>
    {{ $products->links() }}
@endsection
