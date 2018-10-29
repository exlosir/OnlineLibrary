<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-4 col-xs-6 col-md-4 col-lg-4">
                    <nav class="nav">
                        <a class="nav-link" href="/">Главная</a>
                        <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                       @can('isAdmin')<a class="nav-link" href="/admin">Админ панель</a>@endcan
                    </nav>
                </div>
                <div class="col-4 col-xs-4"><span class="app-logo">Mibrary</span></div>
                <div class="col-4 col-xs-2">
                @guest
                    <a href="/login" class="btn btn-outline-info">Авторизация</a>
                    <a href="/register" class="btn btn-outline-info">Регистрация</a>
                </div>
                @endguest
                @auth 
                    <a href="{{route('home')}}" class="link">Профиль</a>
                    <a href="{{route('logout')}}" class="btn btn-outline-info">Выйти</a>
                @endauth
            </div>
        </div>
    </header>
    @yield('content')


    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>