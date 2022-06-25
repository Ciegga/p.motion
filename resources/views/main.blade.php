<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/public/assets/css/fontAwesome.css">
    <link rel="stylesheet" href="/public/assets/css/templatemo-style.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <script src="/public/assets/js/bootstrap.bundle.js"></script>


</head>
<body>


<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <a href=""><div class="logo">
                            <img src="/public/img/logo.png" alt="Venue Logo">
                        </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class="active"><a  href="{{ route('index') }}">Главная</a></li>
                            @if(!Auth::user())
                            <li><a href="{{ route('login') }}">Войти</a></li>
                            <li><a class="scrollTo" data-scrollTo="blog" href="{{ route('register') }}">Регистрация</a></li>
                            @endif
                            @auth
                            <li><a class="scrollTo" data-scrollTo="services" href="{{ route('account') }}">Аккаунт</a></li>
                                @if(Auth::user()->role == 'user')
                            <li><a class="scrollTo" data-scrollTo="contact" href="{{ route('requests.all') }}">Мои заявки </a></li>
                            <li><a class="scrollTo" data-scrollTo="contact" href="{{ route('requests.create') }}">Создать заявку </a></li>
                                @endif
                                @if(Auth::user()->role == 'admin')
                                <li><a class="scrollTo" data-scrollTo="contact" href="{{ route('admin') }}">Все заявки </a></li>
                                @endif
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Выйти</button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="container">
    @yield('content')
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <img src="/public/img/footer_logo.png" alt="Venue Logo">
                    </div>
                    <p>Креатив, съемки, режиссура, монтаж, цветокоррекция, 3D, sound design, написание музыки, клинап, VFX и motion design.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Навигация</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="{{ route('register') }}"><i class="fa fa-stop"></i>Регистрация</a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-stop"></i>Авторизация</a></li>
                                <li><a href="{{ route('account') }}"><i class="fa fa-stop"></i>Мой профиль</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Связь с нами</h4>
                    </div>
                    <ul>
                        <li><span>Номер:</span><a href="#">010-050-0550</a></li>
                        <li><span>Email:</span><a href="#">hi@company.co</a></li>
                        <li><span>Адрес:</span><a href="#">Ул Пушкина,д калатушкино</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
