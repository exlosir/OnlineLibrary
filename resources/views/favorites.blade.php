@extends('layouts.app')

@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger text-center">
        {!! \Session::get('error') !!}
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success text-center">
        {!! \Session::get('success') !!}
    </div>
@endif

    <div class="container" style="margin-top:3rem;">
        {{-- <div class="row justify-content-center"> --}}
            <h2>Страница избранных книг</h2>
            @foreach($favorite as $item)
                <div class="row justify-content-center">
                    <div class="card w-50" style="margin-bottom: 3rem;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-5 text-center"><b> {{$item->name}}</b></div>
                                <div class="col-7 text-right">
                                    <form action="/favorite/delete/{{$item->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Удалить из избранного</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body clearfix">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{$item->link_for_img}}" class="card-img">
                            </div>
                            <div class="col-9">
                                <h6 class=" mb-2"><b> Автор: </b>{{$item->author->author_name}}</h6>
                                <h6 class=" mb-2"><b>Жанр: </b>{{$item->genre->genre_name}}</h6>
                                <h6 class=" mb-2"><b>Год написания: </b>{{$item->year}}</h6>
                            </div>
                        </div>
                        </div>
                        <div class="card-footer">
                                <a href="/catalog/{{$item->id}}" class="btn btn-success">Подробнее</a>
                        </div>
                    </div>
                </div>
    @endforeach
        {{-- </div> --}}
    </div>

@endsection