@extends('auth.layouts.master')
@section('title', __('main.registration'))
@section('content')
    <div class="row justify-content-center mb-5 mt-5">
        <h3>@lang('main.registration')</h3>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-8">

            <form method="post" action="{{ route('register') }}" aria-label="Register">
                <div class="register-wrap p-4 p-md-5 d-flex justify-content-center" >
                    @csrf
{{--                    <div class="form-group row">--}}
{{--                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('main.data.name')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="text" id="name" class="form-control" name="name" value="" required autofocus>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label for="email"--}}
{{--                               class="col-md-4 col-form-label text-md-right">@lang('main.data.email')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="email" id="email" class="form-control" name="email" value="" required--}}
{{--                                   autofocus>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group-row">--}}
{{--                        <label for="password"--}}
{{--                               class="col-md-4 col-form-label text-md-right">@lang('main.password')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="password" id="password" class="form-control" name="password" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group-row">--}}
{{--                        <label for="password-confirm"--}}
{{--                               class="col-md-4 col-form-label text-md-right">@lang('main.confirmPassword')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="password" id="password-confirm" class="form-control"--}}
{{--                                   name="password_confirmation" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row mb-0">--}}
{{--                        <div class="col-md-6 offset-md-4">--}}
{{--                            <button type="submit" class="btn btn-primary">--}}
{{--                                @lang('main.registration')--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-8">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                            </svg>
                        </div>
                        <div class="form-group text-center mt-5">
                            <label for="name">@lang('main.data.name'): </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus   placeholder="@lang('main.data.name')">
                            @include('auth.layouts.error', ['fieldName' => 'name'])
                            {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group text-center">
                            <label for="email">@lang('main.data.email') </label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholder="@lang('main.data.email')">
                            @include('auth.layouts.error', ['fieldName' => 'email'])
                            {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group text-center">
                            <label for="password">@lang('main.password') </label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="@lang('main.password')">
                            @include('auth.layouts.error', ['fieldName' => 'password'])
                            {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group text-center">
                            <label for="password_confirm">@lang('main.confirmPassword') </label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password_confirm" name="password_confirmation" placeholder="@lang('main.confirmPassword')">
{{--                            @include('auth.layouts.error', ['fieldName' => 'password'])--}}
                            {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>

                        <div class="form-group mt-5 d-flex  justify-content-center">
                            <div class="d-flex flex-column">
                                <button type="submit" style="width: 150px; height: 50px" class="auth-button" >{{ strtoupper(__('main.register')) }}</button>
                                <a class="text-center mt-4" href="{{ route('login') }}">{{ strtoupper(__('main.login')) }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
