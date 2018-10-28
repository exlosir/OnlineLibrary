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
            @can('isAdmin')
                <h2>Добро пожаловать, администратор</h2>
                
            @endcan
            {{-- {{$settings}} --}}
        </div>
        <h3>Name app: {{$settings->name}}</h3>
        <h3>Adress: {{$settings->adress}}</h3>
        <h3>Phone: {{$settings->phone}}</h3>
        <h3>Work shedule: {{$settings->work_shedule}}</h3>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <form action="/admin/editSettings" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Название сайта</label>
            <input type="text" class="form-control" name='name'  placeholder="Введите название сайта" value="{{$settings->name}}">
            </div>
            <div class="form-group">
                <label>Адрес</label>
                <input type="text" class="form-control" name='adress'  placeholder="Введите Адрес" value="{{$settings->adress}}">
            </div>
            <div class="form-group">
                <label>Номер телефона</label>
                <input type="text" class="form-control" name='phone'  placeholder="Введите номер телефона" value="{{$settings->phone}}">
            </div>
            <div class="form-group">
                <label>График работы</label>
                <input type="text" class="form-control" name='work_shedule'  placeholder="Введите график работы" value="{{$settings->work_shedule}}">
            </div>
            <button type="submit" class="btn btn-primary">Записать</button>
        </form>
    </div>
</div>

    

@endsection