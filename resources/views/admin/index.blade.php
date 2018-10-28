@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top:3rem;">
        <div class="row justify-content-center">
            @can('isAdmin')
                <h2>Добро пожаловать, администратор</h2>
            @endcan
        </div>
    </div>

@endsection