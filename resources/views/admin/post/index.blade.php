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
                <h2>Добавление книг</h2>
            @endcan
        </div>
    </div>


<div class="container">
    <div class="row justify-content-center">
        <form action="post/add" method="POST"  class="text-center">
            {{ csrf_field() }}

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Название книги</span>
                </div>
                <input type="text" class="form-control" name="name_book">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Автор</span>
                </div>
                <select class="form-control" name="id_author">
                    <option>Выберите автора</option>
                    @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->author_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Жанр</span>
                </div>
                <select class="form-control" name="id_genre">
                    <option>Выберите жанр</option>
                    @foreach ($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->genre_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Год публикации</span>
                </div>
                <input type="text" class="form-control" name="year">
            </div>

            <input type="submit" value="Добавить автора" class="btn btn-outline-success">
        </form>
    </div>
</div>

    

@endsection