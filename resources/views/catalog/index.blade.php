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
    @foreach($books as $book)
        <div class="row justify-content-center">
            <div class="card w-50" style="margin-bottom: 3rem;">
                <div class="card-header">{{$book->name}}</div>
                <div class="card-body">
                  {{-- <h5 class="card-title"></h5> --}}
                  <h6 class="card-subtitle mb-2 text-muted">Автор: {{$book->author->author_name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Жанр: {{$book->genre->genre_name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Дата создания: {{$book->created_at}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Дата обновления: {{$book->updated_at}}</h6>
                </div>
              </div>
        </div>
    @endforeach
</div>
@endsection
