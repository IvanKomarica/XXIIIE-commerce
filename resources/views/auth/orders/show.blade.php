@extends('auth.layouts.master')
@section('title', __('main.order') . $order->id)
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>@lang('main.order')# {{ $order->id }}</h1>
                    <p>@lang('main.customer'): <b> {{ $order->name }} </b></p>
                    <p>@lang('main.data.phone'): <b> {{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>@lang('main.data.name')</th>
                                <th>@lang('main.quantity')</th>
                                <th>@lang('main.price')</th>
                                <th>@lang('main.cost')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $product)
                            <td>
                                <a href="{{ route('product', $product) }}">
                                    <img src="{{ Storage::url($product->image) }}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td><span class="badge">1</span></td>
                            <td>{{ $product->price }}</td>
{{--                            <td>{{ $product->calculate() }}</td>--}}
                            <td></td>
                        @endforeach
                        <tr>
                            <td colspan="3">@lang('main.totalCost'):</td>
                            <td>{{ $order->calculateFullPrice() }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
