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

        {{-- @include('partials.aboutus') --}}

        {{-- @include('partials.promotions') --}}

        @include('partials.menu')

        @include('partials.contact')

    </main> <!-- .main -->

    @include('partials.footer')

    @include('partials.modals')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('js')
</body>

</html>
