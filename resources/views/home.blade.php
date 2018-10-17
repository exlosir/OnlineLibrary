@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:3rem;">
    @foreach($books as $book)
        <div class="row justify-content-center">
            {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> --}}
            
            
            <div class="card w-50" style="margin-bottom: 3rem;">
                <div class="card-header">{{$book->name}}</div>
                <div class="card-body">
                  {{-- <h5 class="card-title"></h5> --}}
                  <h6 class="card-subtitle mb-2 text-muted">Автор: {{$book->author->author_name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Жанр: {{$book->genre->genre_name}}</h6>
                </div>
              </div>
        </div>
            @endforeach
</div>
@endsection
