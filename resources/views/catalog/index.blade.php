@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger text-center">
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

@if (\Session::has('warning'))
<div class="alert alert-warning text-center">
    {!! \Session::get('warning') !!}
</div>
@endif

<div class="container" style="margin-top:3rem;">
    @foreach($books as $book)
        <div class="row justify-content-center">
            <div class="card w-50" style="margin-bottom: 3rem;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-5 text-center"><b> {{$book->name}}</b></div>
                        <div class="col-7 text-right">
                            @auth
                                <form action="/favorite/add/{{$book->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-success">Добавить в избранное</button>
                                </form>
                            @endauth
                        </div>
                    </div>    
                </div>
                <div class="card-body clearfix">
                  <div class="row">
                      <div class="col-3">
                        <img src="{{$book->link_for_img}}" class="card-img">
                      </div>
                      <div class="col-9">
                        <h6 class=" mb-2"><b> Автор: </b>{{$book->author->author_name}}</h6>
                        <h6 class=" mb-2"><b>Жанр: </b>{{$book->genre->genre_name}}</h6>
                        <h6 class=" mb-2"><b>Год написания: </b>{{$book->year}}</h6>
                        <h6 class=" mb-2"><b>Дата создания: </b>{{$book->created_at}}</h6>
                        <h6 class=" mb-2"><b>Дата обновления: </b>{{$book->updated_at}}</h6>
                      </div>
                  </div>
                </div>
                <div class="card-footer">
                        <a href="/catalog/{{$book->id}}" class="btn btn-success">Подробнее</a>
                </div>
              </div>
        </div>
    @endforeach
</div>
@endsection
