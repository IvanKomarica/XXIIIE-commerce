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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                    <li><a href="{{ route('categories') }}">@lang('main.categories')</a></li>
                    <li><a href="{{ route('index') }}">@lang('main.cart')</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="starter-template">
            @yield('content')
        </div>
    </div>
</body>
</html>
