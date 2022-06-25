@extends('main')

@section('content')

    <section class="banner" id="top">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Лучшее для вас</h2>
                    <span>Создаем интерфейсы, уделяем особое внимание креативному подходу.</span>
                    <br>
                    <span>Рекламные ролики, короткометражные фильмы и контент для социальных сетей.</span>
                    <br>
                    <span>Обработка ваших фотографий</span>

                </div>

            </div>
        </div>
        </div>
    </section>

    <section id="mu-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-title">
                                    <h2>Немного о P.Motion</h2>
                                    <p>Студия p. motion — это команда профессионалов специализирующаяся на создании значимых проектов</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start Feature Content -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-about-left">
                                    <img class="" src="/public/img/about-us.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-about-right">
                                    <ul>
                                        <li>
                                            <h3>Наш принцип</h3>
                                            <p>Наш принцип — мультидисциплинарный подход, где идея диктует реализацию. Наша задача сделать бренд, на который приятно смотреть, слушать, трогать</p>
                                        </li>
                                        <li>
                                            <h3>Наше видение</h3>
                                            <p>Создаем интерфейсы, уделяем особое внимание креативному подходу. Фокусируемся на качестве работы приложений и на внимании пользователя, делая взаимодействие более «живым».</p>
                                        </li>
                                        <li>
                                            <h3>Наши ценности</h3>
                                            <p>Для реализации проектов мы используем мультидисциплинарный подход и считаем, что коллаборация разных умов жизненно важны для достижения конечного результата.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Feature Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="section-heading" >
            <span>НАШИ УСЛУГИ</span>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/public/storage/papa.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>UI-Design</h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/public/storage/ENG.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Съемка</h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/public/storage/555.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Видеомонтаж</h4>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Наши работы</span>
                        <h2>Praesent nec dui sed urna</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_1.jpg" alt="">
                            <div class="date-content">
                                <h6>28</h6>
                                <span>August</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Lorem ipsum dolor</h4>
                            <span>Category One</span>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <div class="row"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_2.jpg" alt="">

                            <div class="date-content">
                                <h6>20</h6>
                                <span>September</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Nullam nibh lacus</h4>
                            <span>Category Two</span>
                            <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere.</p>
                            <div class="row"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_3.jpg" alt="">

                            <div class="date-content">
                                <h6>12</h6>
                                <span>October</span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Suspendisse semper non</h4>
                            <span>Category Three</span>
                            <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Наш сервис</span>
                        <h2>Лучший Шаблон Сайта</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_1.png" alt="">
                        </div>
                        <h4>Высококачественный дизайн </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_2.png" alt="">
                        </div>
                        <h4>Полная ответственность за взятый проект</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_3.png" alt="">
                        </div>
                        <h4>Лучшие Html/CSS макеты</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span>Видео Презентация</span>
                <h2>Представляю вашему вниманию веб-студия P.MOTION</h2>
                <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </section>






@endsection

