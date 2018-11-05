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

<div class="container" style="margin-top: 3rem">
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ФИО Автора</th>
                    <th scope="col">Изменение/Удаление</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($authors as $author)
                    <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{$author->author_name}}</td>
                    <td>
                        <form action="authors/{{ $author->id }}" style="display:inline-block">
                            {{ csrf_field() }}
                            <button class="btn btn-outline-warning">Изменить</button>
                        </form>

                        <form action="authors/{{ $author->id }}/delete" method="POST" style="display:inline-block">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>

    

@endsection