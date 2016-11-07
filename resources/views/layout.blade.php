<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecuasanitas - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        @include('_partials.svg')
        
        <div class="overlay-on-small"></div>

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
                        <li class="list-item">
                            <a href="#">CONOZCA ECUASANITAS</a>
                            <ul class="sub-nav">
                                <li><a href="">Quiénes somos</a></li>
                                <li><a href="">Misión + Visión</a></li>
                                <li><a href="">Responsabilidad Social</a></li>
                                <li><a href="">Mejor empresa en calidad de servicios</a></li>
                                <li><a href="">Certificación ISO</a></li>
                            </ul>
                        </li>
                        <li class="list-item">
                            <a href="#">PLANES</a>
                            <ul class="sub-nav">
                                <li><a href="">Plan Total</a></li>
                                <li><a href="">Plan Elegir</a></li>
                                <li><a href="">Plan Ambulatorio</a></li>
                                <li><a href="">Plan Hospitalario</a></li>
                                <li><a href="">Coberturas Adicionales</a></li>
                            </ul>
                        </li>
                        <li class="list-item"><a href="#">SERVICIOS</a></li>
                        <li class="list-item"><a href="#">CENTROS</a></li>
                        <li class="list-item"><a href="#">OFICINAS</a></li>
                        <li><a href="#" class="btn btn--blue">PORTAL DE CLIENTES</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        @yield('content')

        <footer class="footer">
            <div class="flex-container">
                <div class="footer-nav-item">
                    <span class="footer-nav-title">Nosotros</span>
                    <ul>
                        <li><a href="">Misión</a></li>
                        <li><a href="">Visión</a></li>
                        <li><a href="">Compromiso</a></li>
                        <li><a href="">Excelencia</a></li>
                        <li><a href="">Diferencias</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <span class="footer-nav-title">Planes</span>
                    <ul>
                        <li><a href="">Plan Total</a></li>
                        <li><a href="">Plan a Elegir</a></li>
                        <li><a href="">Plan Ambulancia</a></li>
                        <li><a href="">Plan Hospitalario</a></li>
                        <li><a href="">Coberturas Adicionales</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <span class="footer-nav-title">Servicios</span>
                    <ul>
                        <li><a href="">Fonosanitas</a></li>
                        <li><a href="">Infosanitas</a></li>
                        <li><a href="">Laboratorio</a></li>
                        <li><a href="">Cuadro médico</a></li>
                        <li><a href="">Tarjeta VIP</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <span class="footer-nav-title">Centro Médicos</span>
                    <ul>
                        <li><a href="">Ciudades</a></li>
                    </ul>
                    <span class="footer-nav-title">Portal de Clientes</span>
                    <ul>
                        <li><a href="">App</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <span class="footer-nav-title"><b>Síguenos</b> en:</span>
                    <ul class="footer-nav-icons">
                        <li><a href="">
                            <svg><use xlink:href="#twitter" /></svg>
                        </a></li>
                        <li><a href="">
                            <svg><use xlink:href="#facebook" /></svg>
                        </a></li>
                        <li><a href="">
                            <svg><use xlink:href="#youtube" /></svg>
                        </a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <div class="copyright">
            <p class="section-text">&copy; <b>EcuaSanitas</b> S.A. Todos los derechos reservados</p>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.0.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.core.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
