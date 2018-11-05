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
                <h2>Добавление нового автора</h2>
            @endcan
        </div>
    </div>


<div class="container">
    <div class="row justify-content-center">
        
    </div>
</div>

    

@endsection