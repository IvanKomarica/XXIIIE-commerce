@extends('auth.layouts.master')
@section('title', __('main.orders'))
@section('content')
    <div class="col-md-12">
        <div class="row justify-content-center mb-5">
            <h1>@lang('main.orders')</h1>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>When shipped</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
{{--                    <td>{{ $order->user()->name }}</td>--}}
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->calculate() }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               href="{{ route('orders.show', $order) }}"
                            >Открыть</a>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
