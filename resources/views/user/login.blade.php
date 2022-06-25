@extends('main')

@section('content')

    <br>
    <h3>Авторизация</h3>
    <br>
    @if(session()->has('auth'))
        <div class="alert alert-success">Авторизация прошла успешно</div>
    @endif
    @if(session()->has('auth-error'))
        <div class="alert alert-danger">Неверный email или пароль</div>
    @endif
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailValidation">
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
        <br>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
@endsection

