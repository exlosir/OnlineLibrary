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
        <div class="card">
            <div class="card-header text-center">
                <h3>Добавление книги</h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <form action="post/add" method="POST" class="text-center">
                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Название книги</span>
                                </div>
                                <input type="text" class="form-control" name="name_book">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ссылка на изображение книги</span>
                                </div>
                                <input type="text" class="form-control" name="link_for_img">
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

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Полное описание книги</span>
                                </div>
                                <textarea name="full_text" cols="50" rows="10"></textarea>
                            </div>

                            <input type="submit" value="Добавить книгу" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
