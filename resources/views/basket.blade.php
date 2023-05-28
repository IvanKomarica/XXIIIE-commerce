@extends('layouts.master')
@section('title', __('basket.cart'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1 class="mt-5">@lang('main.cart')</h1>
    </div>
    <div class="row mb-5 justify-content-center">
        <h4 class="border border-bottom border-dark ">@lang('main.ordering')</h4>
    </div>
    <div class="panel mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>@lang('main.data.name')</th>
                    <th>@lang('main.count')</th>
                    <th>@lang('main.price')</th>
                    <th class="text-right">@lang('main.cost')</th>
                </tr>
            </thead>
            <tbody>
                @isset($order)
                    @foreach($order->products as $product)
                        <tr>
                            <td><a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                    <img src="{{ Storage::url($product->image) }}" alt="">
                                    {{ $product->name }}
                                </a></td>
                            <td>
                                <div class="btn-group form-inline">
                                    {{ $product->pivot->count }}
                                    <form method="post" action="{{ route('basket-add', $product) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            +
                                        </button>
                                    </form>
                                    <form method="post" action="{{ route('basket-remove', $product) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            -
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $product->price }}</td>
                            <td></td>
                            <td ><a href="#">{{ $product->getPriceForCount() }}</a></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3">Total cost: </td>
                        <td> {{ $order->calculateFullPrice() }} </td>
                    </tr>
                @endisset
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a class="btn btn-success" href="{{ route('order-place') }}">Checkout</a>
        </div>
    </div>
@endsection
