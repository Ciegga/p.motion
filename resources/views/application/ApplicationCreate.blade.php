@extends('main')

@section('content')
    @auth
        @if($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <h1 class="alert-success">Ваша заявка отправленна</h1>
        @endif

        <h2>Отправить заявку</h2>
        <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
            <div class="mb-3">
                <label for="title" class="form-label">Укажите тему вашей заявки</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Укажите небольшое описание вашей заявки</label>
                <input type="text" class="form-control" id="text" name="text">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Выберите изображение вашей завки</label>
                <br>
                <input type="file" name="image" id="image" placeholder="Изображение поста" class="modal-form__input">
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </form>
    @endauth
@endsection
