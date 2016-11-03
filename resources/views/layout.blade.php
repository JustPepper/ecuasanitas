<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecuasanitas - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        @include('_partials.svg')

        <header class="header">
            <div class="flex-container top-nav">
                <div class="header-logo">
                    <img src="{{ asset('images/ecuasanitas-logo.svg') }}" alt="">
                </div>
                <div class="header-responsive-menu">
                    <svg><use xlink:href="#menu" /></svg>
                </div>
            </div>
            <div class="flex-container bottom-nav">
                <p>CENTRO DE ATENCIÓN TELEFÓNICA</p>
                <div class="bottom-nav-info">
                    <span>3956-280 QUITO Y PROVINCIAS</span>
                    <span>1700 32 82 72 GUAYAQUIL</span>
                </div>
                <div class="bottom-nav-search">
                    <form action="">
                        <label for="">
                            <input type="text">
                        </label>
                    </form>
                </div>
            </div>
        </header>
        
        @yield('content')

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.0.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>
