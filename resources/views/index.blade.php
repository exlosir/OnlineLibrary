@extends('layouts.app')

@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger text-center">
        {!! \Session::get('error') !!}
    </div>
@endif

    <div class="container" style="margin-top:3rem;">
        <div class="row justify-content-center">
            <div class="jumbotron block">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
                <hr class="my-4">
                <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>

@endsection