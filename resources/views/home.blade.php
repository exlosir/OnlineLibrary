@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
            @foreach($books as $book)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$book->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Автор: {{$book->author->author_name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Жанр: {{$book->genre->genre_name}}</h6>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
