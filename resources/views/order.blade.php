@extends('layouts.master')
@section('title', __('main.place_order'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1>@lang('main.approve_order')</h1>
    </div>
    <div class="starter-template">
        <div class="container">
            <div class="row justify-content-center">
                <p class="col-md-12">Total cost: <b>{{ $order->calculate() }}</b></p>
                <form action="{{ route('order-confirm') }}" method="post">
                    <div>
                        <p>Enter your name and phone number so that our manager can contact you</p>

                        <div class="container">
                            <div class="form-group mt-5 border border-danger">
                                <label class="control-label col-lg-offset-1 col-lg-4 mr-lg-5" for="name">@lang('main.data.name'): </label>
                                <div class="col-lg-4 ml-2">
                                    <input name="name" type="text" id="name" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-lg-offset-2 col-lg-4" for="phone">@lang('main.data.phone'): </label>
                                <div class="col-lg-4">
                                    <input name="phone" type="text" id="phone" class="form-control">
                                </div>
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
