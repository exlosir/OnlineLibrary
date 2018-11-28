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

<div class="container" style="margin-top:3rem;">
        <div class="row justify-content-center">
            <div class="card w-50" style="margin-bottom: 3rem;">
                <div class="card-header">{{$book->name}}</div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-3">
                        <img src="{{$book->link_for_img}}" class="card-img">
                      </div>
                      <div class="col-9">
                        <h6 class=" mb-2"><b> Автор: </b>{{$book->author->author_name}}</h6>
                        <h6 class=" mb-2"><b>Жанр: </b>{{$book->genre->genre_name}}</h6>
                        <h6 class=" mb-2"><b>Год написания: </b>{{$book->year}}</h6>
                        {!!$book->full_text!!}
                      </div>
                  </div>
                </div>
                <div class="card-footer">
                        <div class="row">
                            <div class="col-6"><b>Создано: </b>{{$book->created_at}}</div>
                            <div class="col-6 text-right"><b>Обновлено: </b>{{$book->updated_at}}</div>
                        </div>
                    </div>
              </div>
        </div>
</div>
@endsection
