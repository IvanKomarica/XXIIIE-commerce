<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.adminPanel') @yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <div id="app">
        <nav style="height: 59px" class="navbar navbar-fixed-top navbar-default navbar-expand-md @auth navbar-admin @else blue-gradient @endauth navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                     @lang('main.backToSite')
                </a>
                <div id="navbar" class="collapse navbar-collapse">
                    @auth
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}"><h5>@lang('main.orders')</h5></a></li>
                        <li><a href="{{ route('categories.index') }}"><h5>@lang('main.categories')</h5></a></li>
                        <li><a href="{{ route('products.index') }}"><h5>@lang('main.all_products')</h5></a></li>
                    </ul>
                    @endauth
{{--                    @guest--}}
{{--                        <ul class="nav navbar-nav navbar-right">--}}
{{--                            <li class="nav-item mr-4">--}}
{{--                                <a href="{{ route('login') }}" class="nav-link">@lang('main.login')</a>--}}
{{--                            </li>--}}
{{--                            <li class="navbar-item">--}}
{{--                                <a href="{{ route('register') }}" class="nav-link">@lang('main.register')</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    @endguest--}}
                    @auth
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item dropdown d-block my-auto">
                                <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true"  aria-expanded="false" v-pre
                                >
                                    @lang('main.administrator')
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: black!important;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('main.logout')</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endauth
                    @auth

{{--                        <ul class="nav navbar-nav navbar-right">--}}
{{--                            <li class="navbar-item dropdown">--}}
{{--                                <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle"--}}
{{--                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre--}}
{{--                                >--}}
{{--                                    @lang('main.administrator') @else {{ Auth::user()->name }}--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a href="{{ route('logout') }}" class="dropdown-item"--}}
{{--                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"--}}
{{--                                    >--}}
{{--                                        @lang('main.logout')--}}
{{--                                    </a>--}}
{{--                                    <form id="logout-form" method="post" action="{{ route('logout') }}" style="display: none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    @endauth
                </div>
            </div>
        </nav>
        <div class="py-4">
            <div class="container">
                    @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
