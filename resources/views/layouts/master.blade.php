<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.online_shop'): @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Releway:100,600" type="text/css">

    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
{{--    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">--}}

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div id="app">
    <nav style="height: 59px" class="navbar navbar-inverse   navbar-expand navbar-fixed-top blue-gradient p-0">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand " style="color: white!important;"
                   href="{{ route('index') }}">@lang('main.online_shop')</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @routeactive('index')><a href="{{ route('index') }}"><h5>@lang('main.all_products')</h5></a></li>
                    <li @routeactive('categories') ><a href="{{ route('categories') }}"><h5>@lang('main.categories')</h5></a></li>
                    <li @routeactive('basket')><a href="{{ route('basket') }}"><h5>@lang('main.cart')</h5></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a style="color: white!important;" href="{{ route('login') }}"><h5><i class="fas fa-sign-in-alt text-white mr-2 "></i>@lang('main.login')</h5></a></li>
                        <li><a style="color: white!important;" href="{{ route('register') }}"><h5>@lang('main.register')</h5></a>
                        </li>
                    @endguest
                    @auth
                        @if(Auth::user()->isAdmin())
                            <li><a href="{{ route('home') }}"><h5>Administrator panel</h5></a></li>
                        @else
                            <li><a href="{{ route('orders.index') }}">My orders</a></li>
                        @endif
                        <li><a href="{{ route('logout') }}"><h5>@lang('main.logout')</h5></a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="app">
            <div class="starter-template">
                @if(session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif
                @if(session()->has('warning'))
                    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
