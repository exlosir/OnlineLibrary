@extends('layouts.app')
@section('content')

<style>
 body {
    background: #ccffcc;
 }
</style>
<div class="login-page">
    <div class="container">
    @if($errors->any())
    {{ $errors->first() }}
    @endif
        <div class="row justify-content-center">
            <h1 class="text-center auth-text">read</h1>
        </div>
        <div class="row justify-content-center auth-logo">
            <img src="{{asset('img/auth-logo.png')}}" alt="">
        </div>

        <h1 class="displa-4 text-center">Регистрация</h1>
        <div class="row justify-content-center">
            
            <form action="{{ route('register') }}" method="POST" class="auth-form text-center">
                {!! csrf_field() !!}
                <div class="auth-form-group">
                    <input type="text" class="form-control" name="username" placeholder="Имя пользователя">
                    <input type="text" class="form-control" name="email" placeholder="E-Mail">
                    <input type="text" class="form-control" name="phone" placeholder="Номер телефона">
                    <input type="password" class="form-control" name="password" placeholder="Пароль">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
                </div>
                <br>
                <div class="form-group form-check">
                       <a href="#termsModal" class="terms" data-toggle="modal">Пользовательское соглашение</a> 
                        <!-- data-toggle="modal" data-target="#termsModal" -->
                </div>
                <input type="submit" class="btn btn-block btn-outline-success " value="Зарегистрироваться">
            </form>
        </div>
    </div>
</div>

<div id="termsModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Пользовательское соглашение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Регистрируясь на сайте, вы принимаете пользовательское соглашение и даете согласие на обработку персональных данных</p>
      </div>
    </div>
  </div>
</div>
@endsection