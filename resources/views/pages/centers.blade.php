@extends('layout')

@section('title', 'Centros')

@section('content')

  <div class="simple-page-banner">
    <div class="simple-page-banner-pattern"></div>
    <div class="simple-page-banner-icon"><svg><use xlink:href="#hospital" /></svg></div>
  </div>

  <section class="section container office">
    <h2 class="section-title">CENTROS <b>MÉDICOS AFILIADOS</b></h2>
    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </section>

  <div class="blue-bar">
    <h2 class="blue-bar-text">ENCUENTRA EL <b>CENTRO MÉDICO</b> MÁS CERCANO</h2>
  </div>

  <section class="directions container" style="margin-top:40px;">
    <div class="directions-select">
      <select class="card-select">
        <option value="1" selected>Guayaquil</option>
        <option value="2">Quito</option>
        <option value="3">Cuenca</option>
        <option value="4">Esmeraldas</option>
        <option value="5">Ambato</option>
        <option value="6">Ibarra</option>
      </select>
    </div>
    <div class="cards-grid">
      <div class="card" data-show="1">
        <h3 class="card-title">Centro Médico Ecuasanitas - <b>BATÁN</b></h3>
        <p class="card-text">
            Gregorio Munga N3-12 y Portete (esq.) <br>
            <b>PBX.:</b> 398 3700
        </p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title">Centro Médico Ecuasanitas - <b>CAROLINA</b></h3>
        <p class="card-text">
          Calle Iñaquito y José Padilla (esq.) <br>
          PBX.: (02) 2 272 279 - 2 273 894 - 2 274 055
        </p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="1">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
      <div class="card" data-show="2">
        <h3 class="card-title"><b>QUITO</b> OFICINA MATRIZ</h3>
        <p class="card-text">Circunvalación Sur 816 e Higueras. PBX.: (04) 2590 770</p>
        <p class="card-text"><b>TRAUMA1:</b> 1700 101010 - 099 7 101010 - (04) 3720 100 ext. 2</p>
        <p class="card-text"><b>Call Center:</b> 1700 328 272</p>
      </div>
    </div>
  </section>

  <section class="section section-contact-info section-check-plans">
		<span class="with-pattern"></span>
		<div class="flex-container">
			<div class="info">
				<h2 class="section-big-title"><b>¿AÚN NO ERES CLIENTES DE ECUASANITAS?</b></h2>
				<h2 class="section-text">Conoce todos nuestros planes, los mejores del país.</h2>
				<a href="" class="btn btn--cian">REVISAR PLANES</a>
			</div>
		</div>
	</section>

@endsection
