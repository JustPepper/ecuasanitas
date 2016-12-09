@extends('layout')

@section('title', 'Servicios')

@section('content')

  <div class="simple-page-banner">
    <div class="simple-page-banner-pattern"></div>
    <div class="simple-page-banner-icon"><svg><use xlink:href="#stats" /></svg></div>
  </div>

  <section class="section container office">
    <h2 class="section-title">SERVICIOS <b>ECUASANITAS</b></h2>
    <p class="section-text">Ofrecemos diversos servicios que complementarán la información brindada por nuestros Asesores Comerciales y ahorrarán su tiempo a través de las descargas de formularios de reembolsos o actualización en línea de su información personal.</p>
  </section>

  <section class="container services-list">
    <div class="service-item service-item--blue">
      <div class="service-item-head"><img src="{{ asset('images/service-item.jpg') }}" alt=""></div>
      <div class="service-item-content">
        <h2 class="service-item-title">FORMULARIOS EN <b>LÍNEA</b></h2>
        <p class="service-item-text">Descarga nuestros formularios y ahorro tiempo en tus trámites.</p>
        <nav class="service-item-list">
          <li><a href="">Reclamación médica <svg><use xlink:href="#down" /></svg></a></li>
          <li><a href="">ODDA Express <svg><use xlink:href="#down" /></svg></a></li>
          <li><a href="">Resultados de Laboratorio en Línea<svg><use xlink:href="#down" /></svg></a></li>
          <li><a href="">Enrolamiento de un beneficiario a tu Plan<svg><use xlink:href="#down" /></svg></a></li>
        </nav>
      </div>
    </div>
    <div class="service-item service-item--blue">
      <div class="service-item-head"><img src="{{ asset('images/service-item.jpg') }}" alt=""></div>
      <div class="service-item-content">
        <h2 class="service-item-title">MÉDICO A <b>DOMICILIO</b></h2>
        <p class="service-item-text">Recibe atención médica inmediata en la comodidad de tu hogar.</p>
        <h3 class="service-item-title"><b>1800 - 8846 - 8846</b></h3>
        <hr class="service-item-line">
        <p class="service-item-text">
          Cobertura de UTIM <br>
          Si dispones de esta cobertura, recibe la más rápida y segura atención médica, por sólo $5 USD, nuestra flota de ambulancias y equipo de médico te atenderán en la comodidad de tu hogar u oficina.
        </p>
        <hr class="service-item-line">
        <p class="service-item-text">
          Cobertura de UTIM <br>
          Si dispones de esta cobertura, recibe la más rápida y segura atención médica, por sólo $5 USD, nuestra flota de ambulancias y equipo de médico te atenderán en la comodidad de tu hogar u oficina.
        </p>
      </div>
    </div>
    <div class="service-item service-item--cian">
      <div class="service-item-head"><img src="{{ asset('images/service-item.jpg') }}" alt=""></div>
      <div class="service-item-content">
        <h2 class="service-item-title">ATENCIÓN AL <b>AFILIADO</b></h2>
        <hr class="service-item-line">
        <p class="service-item-text">
          <b>¿TIENES ALGUNA CONSULTA?</b><br>
          Ingresa a nuestro chat en línea con un ejecutivo de balcón de servicios.</p>
      </div>
    </div>
    <div class="service-item service-item--cian">
      <div class="service-item-head"><img src="{{ asset('images/service-item.jpg') }}" alt=""></div>
      <div class="service-item-content">
        <h2 class="service-item-title">ECUASANITAS <b>APP</b></h2>
        <p class="service-item-text">Ecuasanitas está en tu móvil las 24 horas del día.
        Disponible para: <b>Android</b> y <b>iOS</b></p>
        <hr class="service-item-line">
        <A class="btn btn--border">DESCARGAR APP</A>
      </div>
    </div>
  </section>

  <section class="featured-content featured-content--dark">
    <div class="featured-content-image">
      <img src="{{ asset('images/servicios 5.png') }}" alt="">
    </div>
    <div class="featured-content-text">
      <h2 class="service-item-title">CUADRO <b>MÉDICO</b></h2>
      <p class="section-text"><b>Red de Prestadores Médicos</b></p>
      <hr class="service-item-line">
      <p class="section-text">
        <i>El cuadro médico, es una guía práctica en la cual podrá encontrar información desglosada por ciudad, especialista o clínica de su preferencia.</i>
        Contamos con una amplia red de profesionales, centros médicos, clínicas y hospitales a nivel nacional, reconocidos por su infraestructura, modernos equipos, prestigio y sobre todo por brindar servicios de vanguardia, para garantizar a nuestros afiliados una atención de calidad.
      </p>
      <hr class="service-item-line">
      <p class="section-text">Usted recibirá el Cuadro Médico al momento de su afiliación o puede descargar la aplicación o guía médica completa.</p>
    </div>
  </section>

  <section class="featured-content featured-content--blue">
    <div class="featured-content-image">
      <img src="{{ asset('images/sservicios 6.png') }}" alt="">
    </div>
    <div class="featured-content-text">
      <h2 class="service-item-title">PRONTO <b>SANITAS</b></h2>
      <p class="section-text"><b>Realice sus trámites siempre a tiempo y con total comodidad</b></p>
      <hr class="service-item-line">
      <p class="section-text">
        <i>Prontosanitas le ofrece atención las 24 horas del día a través de buzones colocados en Centros
        Médicos de Ecuasanitas en la ciudad de Quito y Guayaquil.</i>
        Prontosanitas le ofrece atención las 24 horas del día a través de buzones colocados en Centros
        Médicos de Ecuasanitas en la ciudad de Quito y Guayaquil.
      </p>
      <hr class="service-item-line">
      <p class="section-text">Con Prontosanitas podrá realizar los siguientes trámites:</p>
      <hr class="service-item-line">
      <p class="section-text">¿Cómo usar Prontosanitas?</p>
    </div>
  </section>

@endsection
