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
        <address>
            <h2>App name: {{ $settings->name }}</h2>
            <h2>Adress: {{ $settings->adress }}</h2>
            <h2>Phone: {{ $settings->phone }}</h2>
            <h2>Work shedule: {{ $settings->work_shedule }}</h2>
        </address>
    </div>
</div>

<div class="container">
    <div class="col-md-6 offset-md-3 mb-4">
        <h2 class="text-center">Здесь вы можете оставить сообщение администрации</h2>
        <form action="/sendFeedback" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Ваше имя</label>
                <input type="text" class="form-control" name='from' placeholder="">
            </div>

            <div class="form-group">
                <label>E-Mail</label>
                <input type="email" class="form-control" name='email' placeholder="">
            </div>

            <div class="form-group">
                <label>Тема сообщения</label>
                <input type="text" class="form-control" name='header' placeholder="Заголовок сообщения">
            </div>

            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" rows="5" id="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Отправить</button>
        </form>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2303.9339068826043!2d55.966612951121334!3d54.72837738019514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93a47ee1253d3%3A0xa2c621b9591ac95e!2z0YPQuy4g0JrQuNGA0L7QstCwLCA2NSwg0KPRhNCwLCDQoNC10YHQvy4g0JHQsNGI0LrQvtGA0YLQvtGB0YLQsNC9LCA0NTAwMDU!5e0!3m2!1sru!2sru!4v1543814984258" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection
