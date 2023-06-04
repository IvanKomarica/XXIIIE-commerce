@extends('auth.layouts.master')
@section('title', __('main.authorisation'))
@section('content')

        <div class="row.justify-content-center text-center mb-5 mt-5">
            <h3>@lang('main.login')</h3>
{{--            <div class="card-body">--}}
{{--                <form method="post" action="{{ route('login') }}" >--}}
{{--                    @csrf--}}
{{--                    <div class="form-group row">--}}
{{--                        <label for="email" class="col-sm-4 col-form-label text-md-right">@lang('main.data.email')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="email" id="email" class="form-control" name="email" value="" required autofocus>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('main.password')</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="password" id="password" class="form-control" name="password" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row justify-content-center mt-5 mb-0">--}}
{{--                        <div class="col-md-8 offset-md-4">--}}
{{--                            <button type="submit" class="btn btn-primary">--}}
{{--                                @lang('main.login')--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="row ">--}}

{{--            </div>--}}
        </div>
        <form method="POST" action="{{ route('login') }}" aria-label="Login">
            @csrf
            <div class="ftco-section col-md-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-5">
                            <div class="login-wrap p-4 p-md-5">
                                <div class="icon d-flex align-items-center justify-content-center pr-2 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                </div>
                                <form action="#" class="login-form ">
                                    <div class="form-group ">
                                        <input type="text" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                                        @error('email')
                                            @include('auth.layouts.error', ['fieldName' => 'email'])
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex mt-3">
                                        <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                                        @error('password')
                                            @include('auth.layouts.error', ['fieldName' => 'email'])
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                        {{--                                        <div class="w-50">--}}
                                        {{--                                            <label class="checkbox-wrap checkbox-primary">Remember Me--}}
                                        {{--                                                <input type="checkbox" checked>--}}
                                        {{--                                                <span class="checkmark"></span>--}}
                                        {{--                                            </label>--}}
                                        {{--                                        </div>--}}
                                        <div class="form-row mt-2">
                                            <label class="my-auto " for="rememberMe">
                                                <span style="cursor:pointer; color: blue; opacity: 0.8" class="h5 pointer-event font-weight-bold">Remember me</span>
                                            </label>
                                            <div class="main-checkbox ml-2">
                                                <input type="checkbox" id="rememberMe" name="remember_me">
                                                <label  for="rememberMe">
                                                    <div class="tick_mark"></div>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-group mt-5 d-flex justify-content-center">
                                        <button type="submit" style="width: 150px; height: 50px" class="auth-button" >{{strtoupper(__('main.login'))}}</button>
                                    </div>


                                    <div class="row justify-content-center ">
                                        <a style="width: 150px;" class="text-center   button-w text-secondary" href="{{ route('register') }}">{{ strtoupper(__('main.register')) }}</a>

                                    </div>

{{--                                    <div class="float-right mt-1">--}}
{{--                                        <div class="text-md-right">--}}
{{--                                            <a href="#">Forgot Password</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

@endsection
