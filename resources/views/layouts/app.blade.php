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
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-4 col-xs-6 col-md-4 col-lg-4">

                </div>
                <div class="col-4 col-xs-2">
                    <span class="app-logo">Mibrary</span>
                </div>
                <div class="col-4 col-xs-4">
                    @auth
                    <a href="{{route('home')}}" class="btn btn-outline-info">Профиль</a>
                    <a href="{{route('logout')}}" class="btn btn-outline-info">Выйти</a>
                    @endauth
                </div>
            </div>
            <div class="row justify-content-center">
                <nav class="nav">
                    <a class="nav-link" href="/">Главная</a>
                    <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                    <a class="nav-link" href="/catalog">Каталог книг</a>
                    <nav class="nav">
                        {{-- @can('isAdmin')<a class="nav-link" href="/admin">Админ панель</a>@endcan --}}
                        @can('isAdmin')<div class="dropdown open">
                            <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Админ панель
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/admin">Админ панель</a>
                                <a class="dropdown-item" href="/admin/feedback">Обратная связь</a>
                                <a class="dropdown-item" href="/admin/author/authors">Авторы</a>
                                <a class="dropdown-item" href="/admin/author">Добавить авторов</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin/genre/genres">Жанры</a>
                                <a class="dropdown-item" href="/admin/genre">Добавить жанр</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin/post">Добавить книгу</a>
                            </div>
                        </div>
                        @endcan
                    </nav>
                    @auth
                    <a class="nav-link" href="/favorite">Избранные книги</a>
                    @endauth
                </nav>

                @guest
                <a href="/login" class="nav-link">Авторизация</a>
                <a href="/register" class="nav-link">Регистрация</a>
                @endguest
            </div>
        </div>
    </header>

    @yield('content')

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
