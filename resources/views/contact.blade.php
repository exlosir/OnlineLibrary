@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success text-center">
    {!! \Session::get('success') !!}
</div>
@endif

<div class="container" style="margin-top:3rem;">
    <div class="row justify-content-center">
        <address>
            <h2>App name: {{ $settings->name }}</h2>
            <h2>Adress: {{ $settings->adress }}</h2>
            <h2>Phone: {{ $settings->phone }}</h2>
            <h2>Work shedule: {{ $settings->work_shedule }}</h2>
        </address>
    </div>
</div>

<div class="container">
    <div class="col-md-6 offset-md-3 mb-4" >
        <h2 class="text-center">Здесь вы можете оставить сообщение администрации</h2>
        <form action="/sendFeedback" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Ваше имя</label>
                <input type="text" class="form-control" name='from' placeholder="">
            </div>

            <div class="form-group">
                <label>E-Mail</label>
                <input type="email" class="form-control" name='email' placeholder="">
            </div>

            <div class="form-group">
                <label>Тема сообщения</label>
                <input type="text" class="form-control" name='header' placeholder="Заголовок сообщения">
            </div>

            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" rows="5" id="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Отправить</button>

        </form>
    </div>
</div>

@endsection