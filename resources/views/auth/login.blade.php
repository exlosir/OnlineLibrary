@extends('layouts.app')
@section('content')
<style>
 body {
    background: #ccffcc;
 }
</style>
<div class="login-page">
    @if($errors->any())
        {{ $errors->first() }}
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center auth-text">read</h1>
        </div>
        <div class="row justify-content-center auth-logo">
            <img src="{{asset('img/auth-logo.png')}}" alt="">
        </div>

        <h1 class="displa-4 text-center">Авторизация</h1>
        <div class="row justify-content-center">
            
            <form action="{{ route('login') }}" method="POST" class="auth-form text-center">
            {!! csrf_field() !!}
                <div class="auth-form-group">
                    <input type="text" class="form-control" name="username" placeholder="Имя пользователя">
                    <input type="password" class="form-control" name="password" placeholder="Пароль">
                </div>
                <br>
                <input type="submit" class="btn btn-block btn-outline-success " value="Войти">
            </form>
        </div>
    </div>
</div>
@endsection