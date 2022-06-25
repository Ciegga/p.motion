@extends('main')

@section('content')
    @auth
        <br>
        <h3>Личный кабинет</h3>
        <div class="section h3"><b>Имя:</b> {{ Auth::user()->name }}</div>
        <div class="section h3"><b>Фамилия:</b> {{ Auth::user()->surname }}</div>
        <div class="section h3"><b>Отчество:</b> {{ Auth::user()->lastname }}</div>
        <div class="section h3"><b>Адрес электронной почты:</b> {{ Auth::user()->email }}</div>
        <br><br>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Выйти</button>
        </form>
    @endauth
    @guest
        <br>
        <div class="section"><b class="h4">Данная страница доступна только авторизованным пользователям.</b><br> Вам необходимо <a href="{{ route('login') }}">авторизоваться</a></div>
    @endguest
    <style>
        .section {font-size: 18px;}
    </style>
@endsection
