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


<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="card text-center w-50">
            <div class="card-header">
                @can('isAdmin')
                <h2>Добро пожаловать, <span class="text-danger h2"> администратор </span></h2>
                @endcan
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    @if(isset($settings))
                        <address>
                            <h3>Name app: {{$settings->name}}</h3>
                            <h3>Adress: {{$settings->adress}}</h3>
                            <h3>Phone: {{$settings->phone}}</h3>
                            <h3>Work shedule: {{$settings->work_shedule}}</h3>
                        </address>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>


@isset($settings)
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="card w-50 text-center">
            <div class="card-body">
                <form action="/admin/editSettings" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Название сайта</label>
                        <input type="text" class="form-control" name='name' placeholder="Введите название сайта" value="{{$settings->name}}">
                    </div>
                    <div class="form-group">
                        <label>Адрес</label>
                        <input type="text" class="form-control" name='adress' placeholder="Введите Адрес" value="{{$settings->adress}}">
                    </div>
                    <div class="form-group">
                        <label>Номер телефона</label>
                        <input type="text" class="form-control" name='phone' placeholder="Введите номер телефона" value="{{$settings->phone}}">
                    </div>
                    <div class="form-group">
                        <label>График работы</label>
                        <input type="text" class="form-control" name='work_shedule' placeholder="Введите график работы"
                            value="{{$settings->work_shedule}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Записать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endisset

@endsection
