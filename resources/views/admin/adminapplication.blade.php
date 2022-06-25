@extends('main')

@section('content')
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link disabled">Фильтры</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin') }}" class="nav-link @if(is_null(request()->get('filter'))) active @endif" aria-current="page">Все заявки</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin', ['filter' => 1]) }}" class="nav-link @if(request()->get('filter') === '1') active @endif" aria-current="page">Новые</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->get('filter') === '2') active @endif" href="{{ route('admin', ['filter' => 2]) }}">Решенные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->get('filter') === '3') active @endif" href="{{ route('admin', ['filter' => 3]) }}">Отклоненные</a>
        </li>
    </ul>
    @if(count($requests->all()) === 0)
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-6 fw-normal" style="font-size: 28px;">Заявки не найдены</h1>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    @endif
    @foreach($requests->all() as $request)
        <div class="card mb-3">
            <img src="{{asset("storage/$request->image")}}" class="card-img-top" alt="{{ $request->title }}" style="height: 500px; object-fit: cover">
            <div class="card-body">
                <h5 class="card-title">{{ $request->title }}</h5>
                <p class="card-text">{{ $request->text }}</p>
                <p class="card-text">Опубликовано: <small class="text-muted">{{ $request->created_at }}</small></p>
                <p class="btn
                    @if($request->state === 'Новая') btn-primary @endif
                @if($request->state === 'Решена') btn-success @endif
                @if($request->state === 'Отклонена') btn-danger @endif
                    ">{{ $request->state }}</p>
                @if($request->state === 'Новая')
                    <form action="{{route('application.update', ['id'=>$request->id])}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$request->id}}" name="id" >
                        <input type="hidden" value="{{'Решена'}}" name="state" >
                        <button class="btn btn-success" type="submit">Принять</button>

                    </form>
                    <br>
                    <form action="{{route('application.update', ['id'=>$request->id])}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$request->id}}" name="id" >
                        <input type="hidden" value="{{'Отклонена'}}" name="state" >
                        <button class="btn btn-danger" type="submit">Отклонить</button>
                    </form>
                    @endif

            </div>
        </div>
        <br>
        <br>
    @endforeach
    <div class="pagination-block">
        {{ $requests->links('pagination::bootstrap-4') }}
    </div>
@endsection
