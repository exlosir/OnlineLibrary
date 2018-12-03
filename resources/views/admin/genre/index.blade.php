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




<div class="container">
    <div class="row justify-content-center">
        <div class="card w-50">
            <div class="card-header text-center">
                <h3>Добавление нового жанра</h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <form action="genre/add" method="POST" class="text-center">
                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Название жанра</span>
                                </div>
                                <input type="text" class="form-control" name="genre_name">
                            </div>

                            <input type="submit" value="Добавить жанр" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
