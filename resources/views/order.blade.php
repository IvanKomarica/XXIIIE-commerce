@extends('layouts.master')
@section('title', __('main.place_order'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1>@lang('main.approve_order')</h1>
    </div>
    <div class="starter-template">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="col-md-12">Total cost: <b>{{ $order->calculateFullPrice() }}</b></h4>
                <form action="{{ route('order-confirm') }}" method="post">
                    <div>
                        <p>Enter your data so that our manager can contact you</p>

                        <div class="container">
{{--                            <div class="form-group mt-5">--}}
{{--                                <label class="control-label col-lg-offset-1 col-lg-4 mr-lg-5" for="name">@lang('main.data.name'): </label>--}}
{{--                                <div class="col-lg-4 ml-2">--}}
{{--                                    <input name="name" type="text" id="name" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="control-label col-lg-offset-2 col-lg-4" for="phone">@lang('main.data.phone'): </label>--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <input name="phone" type="text" id="phone" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group mt-5">
                                <input type="text" class="form-control rounded-left"  placeholder="{{ __('main.data.name') }}" name="name" required>
                            </div>
                            <div class="form-group d-flex mt-3">
                                <input type="text" class="form-control rounded-left" placeholder="{{ __('main.data.phone') }}" name="phone" required>
                            </div>
                        </div>
                        <br>
                        @csrf
                        <button type="submit" class="btn btn-success mt-2">Accept</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
