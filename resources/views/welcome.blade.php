<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.metas')
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')

    <main class="main">
        <section id="banner">
            @include('partials.banner')
        </section>
        <!-- #banner -->
        <section id="nosotros">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div> --}}
        </section>
        <!-- #nosotros -->
        <section id="contactanos"></section>
        <!-- #contactanos -->
    </main>
    <!-- .main -->

    <footer class="footer position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row footer__content">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="footer__content__logo">
                                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo__img"
                                    alt="{{ env('APP_NAME') }} - Logo">
                                <div class="logo__descripcion">
                                    <p>
                                        <strong class="orange">L</strong> orem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati at ratione
                                        veniam quasi nesciunt qui.</p>
                                    <h6 class="me-5 orange">~ Nana Mala</h6>
                                    <div class="logo__social d-flex align-items-center justify-content-start">
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
                            <div class="footer__content__contacto text-center">
                                <h4>Ubicación</h4>
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
                            <div class="footer__content__enlaces text-center">
                                <h4>Enlaces</h4>
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
                            <div class="footer__content__horarios text-center">
                                <h4>Horarios</h4>
                                <ul class="list-group">
                                    <li class="list-group-item border-0">Lunes a Sábado 6:00 pm <span class="orange">-</span> 10:30 pm</li>
                                    <li class="list-group-item border-0">Domingo 10:00 am <span class="orange">-</span> 4:00 pm</li>
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
                        <a href="{{ config('recycle.footer.credits.email') }}" target="_blank">{{ Str::reverse('vicentE
                            nerI') }}</a>
                    </strong>
                </em>
                <👽>
            </small>
        </div>
        <!-- .credits -->
    </footer>
    <!-- .footer -->
</body>

</html>
