<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecuasanitas - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        @include('_partials.svg')

        <header class="header">
            <div class="flex-container top-nav">
                <div class="top-nav-logo">
                    <img src="{{ asset('images/ecuasanitas-logo.svg') }}" alt="">
                </div>
                <div class="top-nav-responsive">
                    <svg><use xlink:href="#menu" /></svg>
                </div>
                <nav class="top-nav-menu">
                    <ul>
                        <li class="list-item"><a href="#">CONOZCA ECUASANITAS</a></li>
                        <li class="list-item"><a href="#">PLANES</a></li>
                        <li class="list-item"><a href="#">SERVICIOS</a></li>
                        <li class="list-item"><a href="#">CENTROS</a></li>
                        <li class="list-item"><a href="#">OFICINAS</a></li>
                        <li><a href="#" class="btn btn--blue">PORTAL DE CLIENTES</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bottom-nav">
                <div class="flex-container">
                <p>CENTRO DE ATENCIÓN TELEFÓNICA</p>
                <div class="bottom-nav-info">
                    <span>3956-280 QUITO Y PROVINCIAS</span>
                    <span>1700 32 82 72 GUAYAQUIL</span>
                </div>
                <div class="bottom-nav-search">
                    <form action="">
                        <label for="">
                            <input type="text" class="btn">
                        </label>
                    </form>
                </div>
                </div>
            </div>
        </header>
        
        @yield('content')

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.0.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>
