<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.online_shop'): @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Releway:100,600" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top  mt-2">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                    <li><a href="{{ route('categories') }}">@lang('main.categories')</a></li>
                    <li><a href="{{ route('basket') }}">@lang('main.cart')</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}">Administrator panel</a></li>
                    @endguest
                    @auth
                        <li><a href="{{ route('home') }}">Administrator panel</a></li>
                        <li><a href="{{ route('logout') }}">@lang('main.logout')</a></li>
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
</body>
</html>
