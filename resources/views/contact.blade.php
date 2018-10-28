@extends('layouts.app')

@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger text-center">
        {!! \Session::get('error') !!}
    </div>
@endif

    <div class="container" style="margin-top:3rem;">
        <div class="row justify-content-center">
        <h2>App name: {{ $settings->name }}</h2>
        <h2>Adress: {{ $settings->adress }}</h2>
        <h2>Phone: {{ $settings->phone }}</h2>
        <h2>Work shedule: {{ $settings->work_shedule }}</h2>
        </div>
    </div>

@endsection