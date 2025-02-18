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
                                        <a class="text-link" href="{{ config('vdata.footer.urls.facebook') }}" target="_blank">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="mx-3">
                                        <a class="text-link" href="{{ config('vdata.footer.urls.instagram') }}" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="ms-3">
                                        <a class="text-link" href="{{ config('vdata.footer.urls.tiktok') }}" target="_blank">
                                            <i class="fa-brands fa-tiktok"></i>
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
                                {{-- <li class="list-group-item border-0 px-0 py-1">
                                    <a href="#nosotros" class="text-link">Nosotros</a>
                                </li> --}}
                                <li class="list-group-item border-0 px-0 py-1">
                                    <a href="#menu" class="text-link">Menú</a>
                                </li>
                                {{-- <li class="list-group-item border-0 px-0 py-1">
                                    <a href="#galeria" class="text-link">Galería</a>
                                </li> --}}
                                <li class="list-group-item border-0 px-0 py-1">
                                    <a href="#contactanos" class="text-link">Ubicación</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 12 md-6 lg-3 xl-4 -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="footer__content__horarios text-center mt-5 mt-xl-0">
                            <h4 class="subtitle-footer">Horarios</h4>
                            <ul class="list-group">
                                <li class="list-group-item border-0">Lunes a Sábado
                                    6:00 pm
                                    <span class="orange">-</span> 10:30 pm
                                </li>
                                <li class="list-group-item border-0">Domingo
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
</footer> <!-- .footer -->
