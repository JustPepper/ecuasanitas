@extends('layout')

@section('title', 'Benificios')

@section('content')

  <div class="simple-page-banner">
    <div class="simple-page-banner-pattern"></div>
    <div class="simple-page-banner-icon"><svg><use xlink:href="#star" /></svg></div>
  </div>

  <section class="section container office">
    <h2 class="section-title">CLUB DESCUENTOS Y <b>BENEFICIOS</b></h2>
    <p class="section-text">Al presentar su tarjeta de Ecuasanitas de cualquier plan contratado, puede acceder a una gran variedad de descuentos exclusivos que hemos preparado pensando en su bienestar y el de su familia.</p>
  </section>

  <section class="container benefits">
    <div class="benefit-item">
      <div class="benefit-image"><img src="{{ asset('images/logo2_2x.png') }}" alt=""></div>
      <div class="benefit-text">
        <p>Reciba gratis una gruta termal por la compra de una entrada a PISCINA - SPA o acceda al 15% de descuento.
        <br>
        <br>
        <b>Quito / 02 - 2568 989</b>
        </p>
        <a href="">www.termaspapallacta.com</a>
      </div>
    </div>
    <div class="benefit-item">
      <div class="benefit-image"><img src="{{ asset('images/medical-logo.png') }}" alt=""></div>
      <div class="benefit-text">
        <p>Reciba gratis una gruta termal por la compra de una entrada a PISCINA - SPA o acceda al 15% de descuento.
        <br>
        <br>
        <b>Quito / 02 - 2568 989</b>
        </p>
        <a href="">www.termaspapallacta.com</a>
      </div>
    </div>
    <div class="benefit-item">
      <div class="benefit-image"><img src="{{ asset('images/logo.jpg') }}" alt=""></div>
      <div class="benefit-text">
        <p>Reciba gratis una gruta termal por la compra de una entrada a PISCINA - SPA o acceda al 15% de descuento.
        <br>
        <br>
        <b>Quito / 02 - 2568 989</b>
        </p>
        <a href="">www.termaspapallacta.com</a>
      </div>
    </div>

  </section>

@endsection
