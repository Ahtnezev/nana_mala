<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
       <div class="nav__data">
          <a href="#" class="nav__logo">
            {{-- <i class="ri-planet-line"></i> --}}
            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo-nav" alt="Logo Nana Mala">
            <span class="title-footer">Nana Mala</span>
          </a>

          <div class="nav__toggle" id="nav-toggle">
             <i class="ri-menu-line nav__burger"></i>
             <i class="ri-close-line nav__close"></i>
          </div>
       </div>

       <!--=============== NAV MENU ===============-->
       <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
             <li><a href="#banner" class="nav__link">Inicio</a></li>

             <li><a href="#menu" class="nav__link">Menú</a></li>

             {{-- <li><a href="#nosotros" class="nav__link">Nosotros</a></li>

             <li><a href="#promociones" class="nav__link">Promociones</a></li> --}}

             <li><a href="#contactanos" class="nav__link">Ubicación</a></li>
          </ul>
       </div>
    </nav>
 </header>
