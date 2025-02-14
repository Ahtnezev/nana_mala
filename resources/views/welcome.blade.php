<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.metas')
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')

    <div id="invisible"></div>

    <main class="main">
        <section id="banner">
            @include('partials.banner')
        </section> <!-- #banner -->

        <section id="nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title text-md-end">¿Quiénes somos?</h1>
                    </div>
                </div>
                <div class="row flex-md-row-reverse">
                    <div class="col-12 col-md-6">
                        <div class="data">
                            <p class="text-md-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint consectetur exercitationem odit expedita, nostrum aspernatur aperiam reprehenderit us nam repellendus,  aut.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="data">
                            <img src="{{ asset('assets/images/menu/Catedral_de_Santa_Maria_de_la_Asuncion_de_Chilpancingo.png') }}" class="who img-fluid" alt="Catedral de Santa María de la Asunción de Chilpancingo, Guerrero.">
                            <figcaption><small>Catedral de Santa María de la Asunción de Chilpancingo, Guerrero.</small></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section> <!-- #nosotros -->

        <div id="promociones">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title mb-4">Nuestras promociones</h2>
                        <div class="mb-5 position-relative">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ((array) config('vdata.swiper.items') as $item)
                                        <div class="swiper-slide">
                                            <div class="slider__image image-in">
                                                <img class="img-fluid" src="{{ $item }}" alt="">
                                            </div>
                                        </div> <!-- swiper-slide -->
                                    @endforeach
                                </div> <!-- swiper-wraper -->
                            </div> <!-- swiper -->
                            <div class="swiper-pagination swiper-pagination-nosotros"></div>
                        </div> <!-- __slider -->
                    </div>
                </div>
            </div>
        </div>

        <section id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">Menú</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, ipsam! Dicta, incidunt accusamus nemo eius itaque aliquam iure repellat ipsum ducimus eaque quasi facere perferendis aperiam placeat sunt nisi temporibus tempora. Delectus nostrum reprehenderit non explicabo, aperiam sit facilis eum nisi distinctio deserunt possimus earum laboriosam quisquam ducimus, veritatis amet nulla ab? </p>
                        <p>Exercitationem mollitia cumque dolores esse, illo nisi necessitatibus voluptatibus vero excepturi optio voluptate ab nemo. Sint et dolorem numquam. Nihil, possimus ut sint odit assumenda dolor laborum officiis iste omnis. Fugit reiciendis libero eum earum accusantium iure? Reprehenderit sunt tempora ipsum quidem, accusamus maiores illo dolorem similique assumenda!</p>
                        <p class="text-dark fw-semibold">Clic
                            <a
                                href="{{ config('vdata.urls.download_pdf') }}"
                                class="text-decoration-underline"
                                target="_blank">
                                aquí
                            </a>
                            para descargar nuestro menú ✌🏽.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactanos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title mb-3">Ubicación</h2>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="fw-semibold">Contáctanos puee'</h5>
                        @livewire('lw-send-email')
                    </div>
                    <div class="col-12 col-md-6">
                        <div id="map" class="mb-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1929.2566499994869!2d-103.37339457857426!3d20.66652367302138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae08fb2acbb3%3A0x6093fb2c079fdd72!2sCalle%20Vidrio%202203%2C%20Col%20Americana%2C%20Obrera%2C%2044150%20Guadalajara%2C%20Jal.!5e1!3m2!1sen!2smx!4v1728368119983!5m2!1sen!2smx"
                                width="100%"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #contactanos -->
    </main>
    <!-- .main -->

    <footer class="footer position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="https://wa.me/{{ config('vdata.whatsapp_number') }}" target="_blank">
                        <img
                            class="img-fluid position-fixed whatsapp-icon"
                            src="{{ asset('assets/images/icons8-whatsapp.svg') }}"
                            alt="{{ env('APP_NAME') }} WhatsApp"
                        />
                    </a>
                    <div class="row footer__content">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <img src="{{ asset('assets/images/clouds_2.png') }}" class="img-fluid clouds" alt="Clouds">
                            <div class="footer__content__logo">
                                <h3 class="title-footer text-center pb-3">Nana Mala</h3>
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo__img d-block mx-auto" alt="{{ env('APP_NAME') }} - Logo">
                                </a>
                                <div class="logo__descripcion pt-3 px-4 px-lg-0">
                                    <p class="text-center text-lg-start">
                                        <strong class="orange capitalize-letter">L</strong> orem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati at ratione
                                        veniam quasi nesciunt qui.
                                    </p>
                                    <div class="logo__social d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <div class="me-3">
                                            <a class="text-link" href="#" target="_blank">
                                                <i class="fa-brands fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="ms-3">
                                            <a class="text-link" href="#" target="_blank">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12 md-6 lg-3 xl-4 -->
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="footer__content__contacto text-center mt-5 mt-xl-0">
                                <h4 class="subtitle-footer">Ubicación</h4>
                                <ul class="list-group">
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="https://maps.app.goo.gl/1E5XXZXMKRiA9MKU7" class="text-link" target="_blank">
                                            <address>
                                                Calle Vidrio <strong>#2203</strong>, Col Americana,<br>
                                                Obrera, 44150 <br>
                                                <s>G</s> u a n a t o s 👽.
                                            </address>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="w-100">
                                                <a class="text-link" href="https://wa.me/+525629563653" target="_blank">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                    <span class="ms-1">56 29 56 3653</span>
                                                </a>
                                            </div>
                                            <div class="w-100">
                                                <a class="text-link" href="https://wa.me/+527441946164" target="_blank">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                    <span class="ms-1">74 41 94 6164</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a class="text-link" href="mailto:nanamala@gmail.com">
                                            <i class="fa-regular fa-paper-plane"></i>
                                            <span class="ms-1">nanamala@gmail.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 12 md-6 lg-3 xl-4 -->
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="footer__content__enlaces text-center mt-5 mt-xl-0">
                                <h4 class="subtitle-footer">Enlaces</h4>
                                <ul class="list-group">
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="#inicio" class="text-link">Inicio</a>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="#nosotros" class="text-link">Nosotros</a>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="#menu" class="text-link">Nuestro Menú</a>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="#galeria" class="text-link">Galería</a>
                                    </li>
                                    <li class="list-group-item border-0 px-0 py-1">
                                        <a href="#ubicacion" class="text-link">Ubicación</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 12 md-6 lg-3 xl-4 -->
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="footer__content__horarios text-center mt-5 mt-xl-0">
                                <h4 class="subtitle-footer">Horarios</h4>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><span class="green fw-semibold">Lunes a Sábado</span>
                                        6:00 pm
                                        <span class="orange">-</span> 10:30 pm
                                    </li>
                                    <li class="list-group-item border-0"><span class="rose fw-semibold">Domingo</span>
                                        10:00 am
                                        <span class="orange">-</span> 4:00 pm
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 12 md-6 lg-3 xl-4 -->
                    </div>
                    <!-- row -->
                </div>
                <!-- 12 -->
            </div>
            <!-- row -->
        </div>
        <!-- .container -->
        <div class="credits position-absolute pb-1">
            <small class="pb-1">
                <em>by:
                    <strong>
                        <a href="{{ config('vdata.footer.credits.email') }}" target="_blank">{{ Str::reverse(config('vdata.footer_credits')) }}</a>
                    </strong>
                </em>
                <🔥>
            </small>
        </div>
        <!-- .credits -->
    </footer>
    <!-- .footer -->
    @stack('js')
</body>

</html>
