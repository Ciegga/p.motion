@extends('main')

@section('content')

    <br>
    <h3>Регистрация</h3>
    <br>
    @if(session()->has('register'))
        <div class="alert alert-success">Пользователь успешно зарегистрирован. <a href="{{ route('login') }}">Войти в систему</a></div>
    @endif
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Фамилия</label>
            <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="surnameValidation">
            <div id="surnameValidation" class="invalid-feedback">
                @error('surname') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="nameValidation">
            <div id="nameValidation" class="invalid-feedback">
                @error('name') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Отчество</label>
            <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="lastnameValidation">
            <div id="lastnameValidation" class="invalid-feedback">
                @error('lastname') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Электронная почта</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="emailValidation">
            <div id="emailValidation" class="invalid-feedback">
                @error('email') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="passValidation">
            <div id="passValidation" class="invalid-feedback">
                @error('password') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Подтвердите пароль</label>
            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="confPassValidation">
            <div id="confPassValidation" class="invalid-feedback">
                @error('password') {{ $message }} @enderror
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection
