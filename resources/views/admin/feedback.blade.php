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
        <div class="card w-100">
            <div class="card-header text-center">
                <h3>Обратная связь</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">From</th>
                            <th scope="col">Header</th>
                            <th scope="col">Message</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feeds as $feed)
                        <tr>
                            <th scope="row">{{$feed->id}}</th>
                            <td>{{$feed->from}}</td>
                            <td>{{$feed->header}}</td>
                            <td>{{$feed->message}}</td>
                            <td>{{$feed->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
