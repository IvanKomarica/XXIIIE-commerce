@extends('auth.layouts.master')
@section('title', __('main.authorisation'))
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="row mx-auto">
                <div class="card-header mb-5">@lang('main.authorization')</div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('login') }}" aria-label="Login">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">@lang('main.data.email')</label>
                        <div class="col-md-6">
                            <input type="email" id="email" class="form-control" name="email" value="" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('main.password')</label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-5 mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                @lang('main.login')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
