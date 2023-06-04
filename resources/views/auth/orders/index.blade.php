@extends('auth.layouts.master')
@section('title', __('main.orders'))
@section('content')
{{--    <div class="col-md-12">--}}
        <div class="row justify-content-center mb-5 mt-5">
            <h1>@lang('main.orders')</h1>
        </div>
        <table class="table-filled">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>When shipped</th>
                    <th>Price</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
{{--                    <td>{{ $order->user()->name }}</td>--}}
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->calculateFullPrice() }}</td>
                    <td class="p-0">
                        <div class="d-flex justify-content-center" role="group">
                            <a class="btn button-w text-white" type="button"
                               href="{{ route('orders.show', $order) }}"
                            ><i class="fas fa-eye text-secondary"></i></a>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
{{--    </div>--}}
@endsection
