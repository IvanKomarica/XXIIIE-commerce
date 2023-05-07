@extends('auth.layouts.master')
@section('title', __('main.registration'))
@section('content')
   <div class="col-md-8">
       <div class="card">
           <div class="card-header">@lang('main.registration')</div>
           <form method="post" action="{{ route('register') }}" aria-label="Register">
               @csrf
               <div class="form-group row">
                   <label for="name" class="col-md-4 col-form-label text-md-right">@lang('main.data.name')</label>
                   <div class="col-md-6">
                       <input type="text" id="name" class="form-control" name="name" value="" required autofocus>
                   </div>
               </div>
               <div class="form-group row">
                   <label for="email" class="col-md-4 col-form-label text-md-right">@lang('main.data.email')</label>
                   <div class="col-md-6">
                       <input type="email" id="email" class="form-control" name="email" value="" required autofocus>
                   </div>
               </div>
               <div class="form-group-row">
                   <label for="password" class="col-md-4 col-form-label text-md-right">@lang('main.password')</label>
                   <div class="col-md-6">
                       <input type="password" id="password" class="form-control" name="password" required>
                   </div>
               </div>
               <div class="form-group-row">
                   <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('main.confirmPassword')</label>
                   <div class="col-md-6">
                       <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
                   </div>
               </div>
               <div class="form-group row mb-0">
                   <div class="col-md-6 offset-md-4">
                       <button type="submit" class="btn btn-primary">
                           @lang('main.registration')
                       </button>
                   </div>
               </div>
           </form>
       </div>
   </div>
@endsection
