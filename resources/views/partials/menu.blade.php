<section id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title">Nuestro menú</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="col-12">
            <div class="position-relative">
                <div class="items">
                    <div class="full-w-bg menu-background pt-1 ps-2" style="background-image: url({{ asset('assets/images/menu/menu-background.jpg') }})">

                        <div class="overlay"></div>

                        <div class="content">

                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="menu-title pt-3 ps-3 mb-0">Comidas</h2>

                                        <div class="menu-container pt-2 container">

                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Pozole blanco: pollo, cerdo, mixto
                                                            <br>Plato adulto <span class="white-80 fw-semibold">$40</span>
                                                            <br>Plato infantil <span class="white-80 fw-semibold">$85</span>
                                                        </span>
                                                    </div>
                                                    <div class="submenu">Tradicional estilo Guerrerense, acompañado de tostadas, tacos, chicharrón de cerdo, cebolla, chile: picado, capón, aguacate, rábanos y limón.</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Huaraches</span>
                                                        <span class="white-80 fw-semibold">$115</span>
                                                    </div>
                                                    <div class="submenu">Servido con base de frijol, bistec y queso oaxaca (crema, queso rayado, verdura).</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Tacos dorados de pollo (4 pzs.)</span>
                                                        <span class="white-80 fw-semibold">$78</span>
                                                    </div>
                                                    <div class="submenu">Servido con una capa de guacamole en un consomé de pollo con verduras (crema, queso rayado, verdura).</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Tostadas de pollo (3 pzs.)</span>
                                                        <span class="white-80 fw-semibold">$75</span>
                                                    </div>
                                                    <div class="submenu">Servido con una capa de frijol, pollo, crema, verdura.</div>
                                                </div>

                                                <div class="col-12 my-5"></div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Gordita frita</span>
                                                        <span class="white-80 fw-semibold">$38</span>
                                                    </div>
                                                    <div class="submenu">Rellenas con un guisado a elegir.</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80">Picada (pellizcada)</span>
                                                        <span class="white-80 fw-semibold">$45</span>
                                                    </div>
                                                    <div class="submenu">Servido con un guisado acompañado (crema, queso rayado, cebolla).</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80 w-100">Enchiladas de pollo (4 pzs.)
                                                            <span class="white-80 fw-semibold float-end">$100</span>
                                                            <ul class="mb-0">
                                                                <li>Verdes</li>
                                                                <li>Rojas</li>
                                                                <li>Enjitomatadas</li>
                                                                <li>Suizas
                                                                    <span class="white-80 fw-semibold float-end">$130</span>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                    <div class="submenu">Servido con una capa de guacamole (crema, queso rayado, cebolla, lechuga, jitomate, rábano).</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="menu-item">
                                                        <span class="white-80 w-100">Quesadillas
                                                            <br> A la plancha
                                                            <span class="white-80 fw-semibold float-end">$59</span>
                                                            <br> Fritas
                                                            <span class="white-80 fw-semibold float-end">$74</span>
                                                        </span>
                                                    </div>
                                                    <div class="submenu"> <span class="fw-semibold">A la plancha</span>: incluye queso oaxaca, más guisado a escoger.</div>
                                                    <div class="submenu"> <span class="fw-semibold">Fritas</span>: incluye consomé de pollo con un toque de chipotle, salsa verde y cilantro, verdura, crema y queso.</div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="btn btn-light fw-semibold mt-4 mb-5 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                                                        Mostrar guisados
                                                    </button>

                                                    <div
                                                        class="offcanvas offcanvas-bottom text-bg-dark"
                                                        data-bs-theme="dark"
                                                        tabindex="-1"
                                                        id="offcanvasBottom"
                                                        aria-labelledby="offcanvasBottomLabel"
                                                        style="height:50%"
                                                    >
                                                        <div class="offcanvas-header">
                                                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Guisados</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                        </div>
                                                        <div class="offcanvas-body small">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Chorizo</li>
                                                                <li class="list-group-item">Papa c/chorizo</li>
                                                                <li class="list-group-item">Papa c/pollo</li>
                                                                <li class="list-group-item">Picadillo</li>
                                                                <li class="list-group-item">Champiñones</li>
                                                                <li class="list-group-item">Rajas</li>
                                                                <li class="list-group-item">Tinga</li>
                                                                <li class="list-group-item">Pollo natural</li>
                                                                <li class="list-group-item">Queso oaxaca</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- row -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="col-12">
            <section class="download-menu my-4 text-center">
                <p class="text-dark fw-semibold">Clic
                    <a
                        href="{{ config('vdata.urls.download_pdf') }}"
                        class="text-decoration-underline"
                        target="_blank">
                        aquí
                    </a>
                    para descargar nuestro menú ✌🏽.
                </p>
            </section>
        </div>
    </div> --}}
</section>
