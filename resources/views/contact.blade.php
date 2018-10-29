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
        <h2>App name: {{ $settings->name }}</h2>
        <h2>Adress: {{ $settings->adress }}</h2>
        <h2>Phone: {{ $settings->phone }}</h2>
        <h2>Work shedule: {{ $settings->work_shedule }}</h2>
        </div>
    </div>

    <form action="/sendFeedback" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>От кого</label>
        <input type="text" class="form-control" name='from'  placeholder="От кого">
        </div>
        <div class="form-group">
            <label>Заголовок сообщения</label>
            <input type="text" class="form-control" name='header'  placeholder="Заголовок сообщения">
        </div>
        <div class="form-group">
            <label>Сообщение</label>
            <input type="text" class="form-control" name='message'  placeholder="Сообщение">
        </div>
        <div class="form-group">
            <label>E-Mail</label>
            <input type="email" class="form-control" name='email'  placeholder="E-mail" >
        </div>
        <button type="submit" class="btn btn-primary">Записать</button>
    </form>

@endsection